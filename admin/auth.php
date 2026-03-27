<?php
require_once __DIR__ . '/../php/config.php';

// Check if already logged in
function requireAuth() {
    if (empty($_SESSION['admin_logged_in'])) {
        header('Location: /admin/login.php');
        exit;
    }
}

// Login logic
function attemptLogin($username, $password) {
    $db = getDB();
    if (!$db) {
        // Demo mode: accept admin/Admin123!
        if ($username === 'admin' && $password === 'Admin123!') {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_user'] = 'admin';
            return true;
        }
        return false;
    }
    $stmt = $db->prepare("SELECT id, username, password_hash FROM admin_users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user'] = $user['username'];
        return true;
    }
    return false;
}

// Logout
function logout() {
    $_SESSION = [];
    session_destroy();
    header('Location: /admin/login.php');
    exit;
}

// Count new requests
function countNew($table) {
    $db = getDB();
    if (!$db) return rand(1, 12); // demo
    $stmt = $db->prepare("SELECT COUNT(*) FROM {$table} WHERE status = 'new'");
    $stmt->execute();
    return (int)$stmt->fetchColumn();
}

// Get requests with filters
function getRequests($table, $status = '', $search = '', $page = 1, $perPage = 20) {
    $db = getDB();
    if (!$db) return getDemoData($table);

    $where = [];
    $params = [];
    if ($status) { $where[] = 'status = ?'; $params[] = $status; }
    if ($search) {
        $where[] = '(name LIKE ? OR phone LIKE ? OR city LIKE ?)';
        $params[] = "%$search%"; $params[] = "%$search%"; $params[] = "%$search%";
    }
    $whereStr = $where ? 'WHERE ' . implode(' AND ', $where) : '';
    $offset = ($page - 1) * $perPage;
    $stmt = $db->prepare("SELECT * FROM {$table} {$whereStr} ORDER BY created_at DESC LIMIT {$perPage} OFFSET {$offset}");
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function getTotalCount($table, $status = '', $search = '') {
    $db = getDB();
    if (!$db) return 5;
    $where = [];
    $params = [];
    if ($status) { $where[] = 'status = ?'; $params[] = $status; }
    if ($search) { $where[] = '(name LIKE ? OR phone LIKE ? OR city LIKE ?)'; $params[] = "%$search%"; $params[] = "%$search%"; $params[] = "%$search%"; }
    $whereStr = $where ? 'WHERE ' . implode(' AND ', $where) : '';
    $stmt = $db->prepare("SELECT COUNT(*) FROM {$table} {$whereStr}");
    $stmt->execute($params);
    return (int)$stmt->fetchColumn();
}

function updateRequest($table, $id, $status, $notes) {
    $db = getDB();
    if (!$db) return true;
    $stmt = $db->prepare("UPDATE {$table} SET status = ?, notes = ? WHERE id = ?");
    return $stmt->execute([$status, $notes, $id]);
}

function deleteRequest($table, $id) {
    $db = getDB();
    if (!$db) return true;
    $stmt = $db->prepare("DELETE FROM {$table} WHERE id = ?");
    return $stmt->execute([$id]);
}

// Demo data
function getDemoData($table) {
    $profiles = ['products'=>'Продукты','clothes'=>'Одежда','pharma'=>'Аптека','beauty'=>'Косметика'];
    $cities = ['Ижевск','Казань','Москва','Екатеринбург','Пермь'];
    $names = ['Иван Петров','Алина Смирнова','Дмитрий Козлов','Ольга Новикова','Сергей Волков'];
    $statuses = ['new','in_progress','done','new','new'];
    $data = [];
    for ($i = 1; $i <= 8; $i++) {
        $row = ['id'=>$i,'name'=>$names[$i%5],'phone'=>'+7 (912) '.str_pad($i*111,7,'0',STR_PAD_LEFT),'city'=>$cities[$i%5],'status'=>$statuses[$i%5],'notes'=>'','created_at'=>date('Y-m-d H:i:s', strtotime("-{$i} day"))];
        if ($table !== 'callback_requests') {
            $row['points_count'] = ($i % 3 === 0) ? '6-20' : ($i % 2 === 0 ? '2-5' : '1');
            $row['retail_profile'] = array_values($profiles)[$i%4];
        }
        if ($table === 'price_requests') {
            $row['has_crm'] = ['no','partially','yes'][$i%3];
            $row['monthly_customers'] = ['less-500','500-2000','2000-10000'][$i%3];
            $row['budget'] = ['10-30k','30-100k','less-10k'][$i%3];
        }
        $data[] = $row;
    }
    return $data;
}
?>

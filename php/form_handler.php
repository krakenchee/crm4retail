<?php
require_once __DIR__ . '/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$action = sanitize($_POST['action'] ?? '');

// Validate CSRF
$csrf = $_POST['csrf_token'] ?? '';
if (!verify_csrf($csrf)) {
    echo json_encode(['success' => false, 'message' => 'Ошибка безопасности. Обновите страницу.']);
    exit;
}

switch ($action) {
    case 'demo':
        handleDemoRequest();
        break;
    case 'price':
        handlePriceRequest();
        break;
    case 'callback':
        handleCallbackRequest();
        break;
    default:
        echo json_encode(['success' => false, 'message' => 'Неизвестное действие']);
}

function handleDemoRequest() {
    $name = sanitize($_POST['name'] ?? '');
    $phone = sanitize($_POST['phone'] ?? '');
    $city = sanitize($_POST['city'] ?? '');
    $points = sanitize($_POST['points_count'] ?? '');
    $profile = sanitize($_POST['retail_profile'] ?? '');

    if (!$name || !$phone || !$city || !$points || !$profile) {
        echo json_encode(['success' => false, 'message' => 'Заполните все обязательные поля']);
        return;
    }

    if (!preg_match('/^[\+\d\s\(\)\-]{7,20}$/', $phone)) {
        echo json_encode(['success' => false, 'message' => 'Введите корректный номер телефона']);
        return;
    }

    $db = getDB();
    if ($db) {
        $stmt = $db->prepare("INSERT INTO demo_requests (name, phone, city, points_count, retail_profile) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $phone, $city, $points, $profile]);
    }

    echo json_encode(['success' => true, 'message' => 'Заявка принята! Менеджер свяжется с вами в течение 30 минут.']);
}

function handlePriceRequest() {
    $name = sanitize($_POST['name'] ?? '');
    $phone = sanitize($_POST['phone'] ?? '');
    $city = sanitize($_POST['city'] ?? '');
    $points = sanitize($_POST['points_count'] ?? '');
    $profile = sanitize($_POST['retail_profile'] ?? '');
    $has_crm = sanitize($_POST['has_crm'] ?? '');
    $customers = sanitize($_POST['monthly_customers'] ?? '');
    $features = sanitize($_POST['features'] ?? '');
    $budget = sanitize($_POST['budget'] ?? '');

    if (!$name || !$phone || !$city || !$points || !$profile) {
        echo json_encode(['success' => false, 'message' => 'Заполните все обязательные поля']);
        return;
    }

    if (!preg_match('/^[\+\d\s\(\)\-]{7,20}$/', $phone)) {
        echo json_encode(['success' => false, 'message' => 'Введите корректный номер телефона']);
        return;
    }

    $db = getDB();
    if ($db) {
        $stmt = $db->prepare("INSERT INTO price_requests (name, phone, city, points_count, retail_profile, has_crm, monthly_customers, features, budget) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $phone, $city, $points, $profile, $has_crm, $customers, $features, $budget]);
    }

    echo json_encode(['success' => true, 'message' => 'Данные отправлены на рассмотрение. Менеджер свяжется с вами для расчёта стоимости!']);
}

function handleCallbackRequest() {
    $name = sanitize($_POST['name'] ?? '');
    $phone = sanitize($_POST['phone'] ?? '');

    if (!$name || !$phone) {
        echo json_encode(['success' => false, 'message' => 'Введите имя и телефон']);
        return;
    }

    if (!preg_match('/^[\+\d\s\(\)\-]{7,20}$/', $phone)) {
        echo json_encode(['success' => false, 'message' => 'Введите корректный номер телефона']);
        return;
    }

    $db = getDB();
    if ($db) {
        $stmt = $db->prepare("INSERT INTO callback_requests (name, phone) VALUES (?, ?)");
        $stmt->execute([$name, $phone]);
    }

    echo json_encode(['success' => true, 'message' => 'Отлично! Наш менеджер перезвонит вам в течение 5 минут.']);
}
?>

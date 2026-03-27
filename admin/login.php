<?php
require_once __DIR__ . '/../php/config.php';
require_once __DIR__ . '/auth.php';

// Redirect if already logged in
if (!empty($_SESSION['admin_logged_in'])) {
    header('Location: /admin/');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    if (attemptLogin($username, $password)) {
        header('Location: /admin/');
        exit;
    } else {
        $error = 'Неверный логин или пароль';
        sleep(1); // Brute-force protection
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход — Администратор CRM4Retail</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="/admin/admin.css">
</head>
<body>
<div class="login-page">
  <div class="login-card">
    <div class="login-card__logo">
      <div style="width:36px;height:36px;background:#2563EB;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#fff;font-family:'JetBrains Mono',monospace;font-size:13px;font-weight:600">C4</div>
      <div>
        <div style="font-size:16px;font-weight:800;letter-spacing:-.02em">CRM4Retail</div>
        <div style="font-size:11px;color:var(--muted)">Административная панель</div>
      </div>
    </div>
    <h1>Вход</h1>
    <p class="login-card__sub">Введите данные для входа в панель управления</p>

    <?php if ($error): ?>
    <div style="padding:12px 16px;background:rgba(239,68,68,.08);border:1px solid rgba(239,68,68,.25);border-radius:8px;color:#991b1b;font-size:13px;font-weight:500;margin-bottom:16px">
      ⚠️ <?= htmlspecialchars($error) ?>
    </div>
    <?php endif; ?>

    <form method="POST" novalidate>
      <div class="form-group">
        <label class="form-label">Логин</label>
        <input type="text" name="username" class="form-control" placeholder="admin" autocomplete="username" required value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
      </div>
      <div class="form-group">
        <label class="form-label">Пароль</label>
        <div style="position:relative">
          <input type="password" name="password" class="form-control" placeholder="••••••••" autocomplete="current-password" required id="pwd-field">
          <button type="button" onclick="togglePwd()" style="position:absolute;right:10px;top:50%;transform:translateY(-50%);background:none;border:none;font-size:16px;cursor:pointer;opacity:.5" id="pwd-toggle">👁</button>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:8px;padding:12px">Войти</button>
    </form>

  </div>
</div>
<script>
function togglePwd() {
  const f = document.getElementById('pwd-field');
  const b = document.getElementById('pwd-toggle');
  f.type = f.type === 'password' ? 'text' : 'password';
  b.textContent = f.type === 'password' ? '👁' : '🙈';
}
</script>
</body>
</html>

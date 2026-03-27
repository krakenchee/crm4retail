<?php
require_once __DIR__ . '/../php/config.php';
$csrf = csrf_token();
$currentPage = $currentPage ?? '';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#2563EB">

  <title><?= htmlspecialchars($pageTitle ?? 'CRM4Retail — CRM для роста продаж в рознице') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc ?? 'CRM4Retail — система управления клиентами для розничных магазинов. Сегментация, бонусная программа, автоматические акции и подсказки кассирам.') ?>">
  <meta name="keywords" content="crm для розницы, crm для магазина, бонусная программа для магазина">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle ?? 'CRM4Retail') ?>">
  <meta property="og:description" content="CRM-система для розничных магазинов. Увеличьте продажи с помощью анализа клиентов.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://k.filipp.su/">
  <link rel="canonical" href="https://k.filipp.su/">
  <link rel="icon" type="image/x-icon" sizes="32x32" href="https://static.tildacdn.com/tild6163-6664-4138-b237-333032353965/Group-427319232.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/components.css">

  <?php if ($currentPage === ''): ?>
      <link rel="stylesheet" href="/css/index.css">
  <?php elseif ($currentPage === 'for-whom'): ?>
      <link rel="stylesheet" href="/css/for-whom.css">
  <?php elseif ($currentPage === 'cases'): ?>
      <link rel="stylesheet" href="/css/cases.css">
  <?php elseif ($currentPage === 'pricing'): ?>
      <link rel="stylesheet" href="/css/pricing.css">
  <?php endif; ?>

  <script>
    window.csrfToken = '<?= $csrf ?>';
  </script>
</head>
<body>

<!-- Hidden CSRF for forms -->
<input type="hidden" id="csrf-global" name="csrf_token" value="<?= $csrf ?>">

<!-- Navigation -->
<nav class="nav" id="nav">
  <div class="container">
    <div class="nav__inner">
      <a href="/" class="nav__logo">
        <span class="nav__logo-text">CRM<span>4</span>Retail</span>
      </a>

      <ul class="nav__menu">
        <li><a href="/for-whom.php" class="nav__link <?= $currentPage === 'for-whom' ? 'active' : '' ?>">Для кого</a></li>
        <li><a href="/cases.php" class="nav__link <?= $currentPage === 'cases' ? 'active' : '' ?>">Кейсы</a></li>
        <li><a href="/pricing.php" class="nav__link <?= $currentPage === 'pricing' ? 'active' : '' ?>">Цены</a></li>
      </ul>

      <div class="nav__actions">
        <button class="btn btn-ghost btn-sm" onclick="openModal('modal-callback')">Обратный звонок</button>
        <button class="btn btn-primary btn-sm" onclick="openModal('modal-demo')">Получить демо</button>
      </div>

      <button class="nav__burger" aria-label="Меню">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

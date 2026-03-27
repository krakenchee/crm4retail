<?php
$pageTitle = 'Кейсы CRM4Retail — реальные результаты внедрения для сетей магазинов, аптек и кофеен';
$pageDesc = 'Реальные кейсы внедрения CRM4Retail: увеличение чека на 20%, повышение конверсии рассылок до 7%, экономия 5% выручки. Истории успеха для ритейла, HoReCa и аптек.';
$currentPage = 'cases';
require_once 'php/header.php';

$cases = [
  [
    'name' => 'Супермаркеты Гастроном',
    'category' => 'Продукты',
    'category_ru' => 'Сеть супермаркетов',
    'city' => 'Россия',
    'points' => 0,
    'points_text' => 'сеть супермаркетов',
    'period' => '2 месяца',
    'icon_svg' => '<path d="M3 9l9-6 9 6v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9z"/><path d="M9 22V12h6v10"/>',
    'color' => '#10B981',
    'desc' => 'Сеть супермаркетов, которая столкнулась с проблемой: покупатели приходили хаотично, не было инструмента для удержания постоянных клиентов. Скидочные карты не давали понимания, кто и как часто покупает.',
    'what_done' => [
      'Подключение CRM-системы с единой базой покупателей',
      'Внедрение бонусной программы вместо скидочной системы',
      'Настройка автоматического начисления баллов за покупки',
      'Сегментация клиентов по частоте посещений и среднему чеку'
    ],
    'results' => [
      '+10-15% средний чек после внедрения бонусной системы',
      'Повышение лояльности постоянных покупателей',
      'Прозрачная аналитика по каждому клиенту'
    ]
  ],
  [
    'name' => 'Питьсбург',
    'category' => 'Напитки',
    'category_ru' => 'Сеть магазинов разливных напитков',
    'city' => 'Россия',
    'points' => 40,
    'points_text' => '40 магазинов',
    'period' => '3 месяца',
    'icon_svg' => '<path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><path d="M6 1v3M10 1v3M14 1v3"/>',
    'color' => '#8B5CF6',
    'desc' => 'Сеть из 40 магазинов разливных напитков. До внедрения CRM4Retail рассылки клиентам не работали: конверсия составляла всего 0,5%. Не было единой системы лояльности и интеграции с мобильным приложением.',
    'what_done' => [
      'Интеграция CRM с мобильным приложением и кассовой системой',
      'Внедрение бонусной системы с накоплением баллов',
      'Создание сайта + готового приложения для доставки',
      'Настройка автоматических триггерных рассылок'
    ],
    'results' => [
      '+20% средний чек после подключения бонусной системы',
      'Конверсия рассылок в покупки: с 0,5% до 7%',
      'Полная интеграция с кассами и мобильным приложением'
    ]
  ],
  [
    'name' => 'Coffee Like',
    'category' => 'HoReCa',
    'category_ru' => 'Сеть кофеен',
    'city' => 'Россия',
    'points' => 900,
    'points_text' => '900 торговых точек',
    'period' => '4 месяца',
    'icon_svg' => '<path d="M4 4h16v16H4zM8 8h8v8H8zM12 2v4M12 18v4M2 12h4M18 12h4"/>',
    'color' => '#F59E0B',
    'desc' => 'Федеральная сеть кофеен с 900 точками. Проблема: сложная коммуникация с клиентами, отсутствие единого канала для推送-уведомлений, разрозненная база покупателей по франчайзи.',
    'what_done' => [
      'Подключение CRM с единым управлением клиентской базой',
      'Интеграция с кассовыми системами iiko',
      'Подключение касс и синхронизация данных в реальном времени',
      'Создание web-приложения для регистрации клиентов'
    ],
    'results' => [
      '+15% выручки у франчайзи после внедрения',
      'Упрощение коммуникации через push-уведомления',
      'Единая система лояльности для всей сети'
    ]
  ],
  [
    'name' => 'Фармаимпекс',
    'category' => 'Аптеки',
    'category_ru' => 'Федеральная сеть аптек',
    'city' => 'Россия',
    'points' => 700,
    'points_text' => '700 точек',
    'period' => '6 месяцев',
    'icon_svg' => '<path d="M3 6l9-4 9 4v12l-9 4-9-4V6z"/><path d="M12 6v12M21 10H3"/>',
    'color' => '#0EA5E9',
    'desc' => 'Федеральная сеть аптек с 700 точками. Использовали скидочную систему, которая съедала маржинальность. Нужно было перейти на бонусную модель и настроить персонализированные рассылки.',
    'what_done' => [
      'Подключение CRM с интеграцией в BI-аналитику QlikView',
      'Переход со скидочной системы на бонусную',
      'Настройка таргетированных рассылок по целевым группам',
      'Сегментация покупателей по профилю здоровья (анонимно)'
    ],
    'results' => [
      'Экономия до 5% всей выручки за счёт перехода на бонусы',
      '+17% продаж за счёт таргетированных рассылок',
      'Полная интеграция с BI-аналитикой'
    ]
  ]
];
?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Главная</a><span class="breadcrumb__sep">/</span><span>Кейсы</span>
    </div>
    <span class="label">Реальные результаты</span>
    <h1 class="headline">Кейсы внедрения CRM4Retail</h1>
    <p class="lead" style="margin-top:16px;max-width:680px">Истории успеха наших клиентов — от сетей супермаркетов до федеральных аптек. Увеличение чека, рост лояльности и автоматизация маркетинга.</p>
  </div>
</div>

<section class="section">
  <div class="container">
    <div style="display:flex;flex-direction:column;gap:64px">
      <?php foreach($cases as $i => $c): ?>
      <div style="background:var(--clr-surface);border:1px solid var(--clr-border);border-radius:var(--radius-xl);overflow:hidden;box-shadow:var(--shadow)" class="fade-up">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:0" class="case-full">
          <div style="padding:48px;border-right:1px solid var(--clr-border)">
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:24px">
              <div style="width:64px;height:64px;background:<?= $c['color'] ?>18;border-radius:16px;display:flex;align-items:center;justify-content:center">
                <svg class="icon icon-lg" viewBox="0 0 24 24" fill="none" stroke="<?= $c['color'] ?>" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <?= $c['icon_svg'] ?>
                </svg>
              </div>
              <div>
                <div style="font-size:11px;font-weight:600;color:<?= $c['color'] ?>;font-family:var(--font-mono);text-transform:uppercase;letter-spacing:.1em;margin-bottom:4px"><?= $c['category'] ?></div>
                <div style="font-size:22px;font-weight:800"><?= htmlspecialchars($c['name']) ?></div>
                <div style="font-size:13px;color:var(--clr-text-muted)">
                  📍 <?= htmlspecialchars($c['city']) ?> · <?= $c['points'] > 0 ? $c['points'] . ' ' . $c['points_text'] : $c['points_text'] ?>
                </div>
              </div>
            </div>
            <p style="color:var(--clr-text-2);font-size:15px;line-height:1.7;margin-bottom:28px"><?= htmlspecialchars($c['desc']) ?></p>
            <div style="font-size:13px;font-weight:600;color:var(--clr-text);margin-bottom:16px">Что мы сделали:</div>
            <ul style="list-style:none;display:flex;flex-direction:column;gap:10px">
              <?php foreach($c['what_done'] as $d): ?>
              <li style="font-size:14px;color:var(--clr-text-2);display:flex;gap:10px;align-items:flex-start">
                <span style="color:<?= $c['color'] ?>;font-weight:700;flex-shrink:0">→</span> <?= htmlspecialchars($d) ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div style="padding:48px;background:var(--clr-surface2)">
            <div style="font-size:13px;font-weight:600;color:var(--clr-text);margin-bottom:20px">Результаты:</div>
            <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:32px">
              <?php foreach($c['results'] as $r): ?>
              <div style="background:var(--clr-surface);border:1px solid var(--clr-border);border-radius:var(--radius);padding:14px 18px;font-size:15px;font-weight:700;color:<?= $c['color'] ?>;font-family:var(--font-mono)">
                <?= htmlspecialchars($r) ?>
              </div>
              <?php endforeach; ?>
            </div>
            <div style="padding:16px 20px;background:<?= $c['color'] ?>10;border:1px solid <?= $c['color'] ?>30;border-radius:var(--radius);font-size:13px;color:<?= $c['color'] ?>">
              <strong>⏱ Срок внедрения:</strong> <?= $c['period'] ?>
            </div>
            <div style="margin-top:28px">
              <button onclick="openModal('modal-demo')" class="btn btn-primary" style="width:100%;justify-content:center">Хочу такие же результаты →</button>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta">
  <div class="container">
    <h2 class="headline">Хотите такие же результаты?</h2>
    <p>Оставьте заявку на демо — расскажем, как CRM4Retail поможет именно вашему бизнесу</p>
    <button class="btn btn-white btn-lg" onclick="openModal('modal-demo')">Получить демо CRM4Retail</button>
  </div>
</section>

<?php require_once 'php/footer.php'; ?>
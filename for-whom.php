<?php
$pageTitle = 'Для кого CRM4Retail — розница, сети, франшизы';
$pageDesc = 'CRM4Retail подходит для одиночных магазинов, розничных сетей и франшиз. Узнайте, как система решает задачи вашего бизнеса.';
$currentPage = 'for-whom';
require_once 'php/header.php';
?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Главная</a><span class="breadcrumb__sep">/</span><span>Для кого</span>
    </div>
    <span class="label">Для кого</span>
    <h1 class="headline">CRM4Retail — для любого<br>розничного бизнеса</h1>
    <p class="lead" style="margin-top:16px;max-width:560px">Один магазин или сотни точек — система адаптируется под ваш масштаб</p>
  </div>
</div>

<section class="section">
  <div class="container">

    <!-- Магазины -->
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;margin-bottom:96px" class="fade-up fw-grid">
      <div>
        <span class="label">Розничный магазин</span>
        <h2 class="headline" style="margin:16px 0">Один магазин — и уже работает</h2>
        <p style="color:var(--clr-text-2);font-size:17px;line-height:1.7;margin-bottom:28px">
          Не нужно быть сетью, чтобы использовать CRM. CRM4Retail запускается за 2 дня и сразу начинает собирать данные о покупателях. Уже через месяц вы увидите, кто ваш лояльный клиент.
        </p>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:14px;margin-bottom:32px">
          <?php foreach(['Быстрое подключение: 2 рабочих дня','Работает с любой кассой','Не нужен IT-отдел — всё настроим за вас','Понятный интерфейс для кассира','Личный кабинет для владельца со смартфона'] as $f): ?>
          <li style="display:flex;gap:12px;align-items:flex-start;font-size:15px;color:var(--clr-text-2)">
            <span style="width:22px;height:22px;background:var(--clr-accent-lt);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--clr-accent);font-size:12px;font-weight:700;flex-shrink:0;margin-top:1px">✓</span>
            <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <button class="btn btn-primary" onclick="openModal('modal-demo')">Запустить для моего магазина →</button>
      </div>
      <div style="background:var(--clr-surface2);border:1px solid var(--clr-border);border-radius:var(--radius-xl);padding:40px">
        <div style="font-size:13px;font-weight:700;color:var(--clr-text-muted);margin-bottom:20px;font-family:var(--font-mono);text-transform:uppercase;letter-spacing:.1em">Типичные результаты за 3 месяца</div>
        <?php foreach([
          ['Распознавание постоянных клиентов','0%','до 78%','var(--clr-accent)'],
          ['Повторные покупки','+0%','+34%','var(--clr-success)'],
          ['Средний чек','+0%','+19%','var(--clr-success)'],
          ['Ручная работа с базой','2–3 ч/день','0 мин','var(--clr-success)'],
        ] as $r): ?>
        <div style="margin-bottom:16px">
          <div style="display:flex;justify-content:space-between;font-size:13px;color:var(--clr-text-muted);margin-bottom:6px">
            <span><?= $r[0] ?></span>
            <span style="font-weight:700;color:<?= $r[3] ?>"><?= $r[2] ?></span>
          </div>
          <div style="height:6px;background:var(--clr-border);border-radius:3px;overflow:hidden">
            <div style="height:100%;background:<?= $r[3] ?>;border-radius:3px;width:<?= $r[2] === '0 мин' ? '100' : '70' ?>%;transition:width 1s"></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <hr style="border:none;border-top:1px solid var(--clr-border);margin-bottom:96px">

    <!-- Сети -->
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;margin-bottom:96px" class="fade-up fw-grid">
      <div style="order:0">
        <span class="label">Розничные сети</span>
        <h2 class="headline" style="margin:16px 0">Одна CRM — для всей сети</h2>
        <p style="color:var(--clr-text-2);font-size:17px;line-height:1.7;margin-bottom:28px">
          CRM4Retail разработана с учётом специфики сетевой розницы. Единая база клиентов, сквозная аналитика, централизованное управление акциями — при этом каждый менеджер точки видит только свои данные.
        </p>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:14px;margin-bottom:32px">
          <?php foreach(['Единая база по всей сети','Разграничение доступа по ролям','API для интеграции с ERP','Масштабирование без ограничений','Выделенный менеджер для сетей'] as $f): ?>
          <li style="display:flex;gap:12px;align-items:flex-start;font-size:15px;color:var(--clr-text-2)">
            <span style="width:22px;height:22px;background:var(--clr-accent-lt);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--clr-accent);font-size:12px;font-weight:700;flex-shrink:0;margin-top:1px">✓</span>
            <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <button class="btn btn-primary" onclick="openModal('modal-demo')">Обсудить для моей сети →</button>
      </div>
      <div style="background:var(--clr-text);border-radius:var(--radius-xl);padding:40px;color:#fff;order:1">
        <div style="font-size:13px;font-weight:700;color:rgba(255,255,255,.5);margin-bottom:20px;font-family:var(--font-mono);text-transform:uppercase;letter-spacing:.1em">Управление сетью</div>
        <div style="display:flex;flex-direction:column;gap:16px">
          <?php foreach([
            ['<svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6a8 3 0 1 0 16 0a8 3 0 1 0 -16 0" /><path d="M4 6v6a8 3 0 0 0 16 0v-6" /><path d="M4 12v6a8 3 0 0 0 16 0v-6" />
</svg>','Единая база клиентов','Все покупатели из всех точек в одной базе. Клиент получает баллы и акции в любом магазине сети.'],
            ['<svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M7 12a5 5 0 1 0 5 -5" /><path d="M6.29 18.957a9 9 0 1 0 5.71 -15.957" />
</svg>','Аналитика по точкам','Сравнивайте эффективность каждого магазина. Видите слабые места и лучшие практики.'],
            ['<svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 8v4.172a2 2 0 0 0 .586 1.414l5.71 5.71a2.41 2.41 0 0 0 3.408 0l3.592 -3.592a2.41 2.41 0 0 0 0 -3.408l-5.71 -5.71a2 2 0 0 0 -1.414 -.586h-4.172a2 2 0 0 0 -2 2" /><path d="M18 19l1.592 -1.592a4.82 4.82 0 0 0 0 -6.816l-4.592 -4.592" /><path d="M7 10h-.01" />
</svg>','Централизованные акции','Запускайте акцию сразу по всей сети за один клик. Персонализация работает автоматически.'],
          ] as $f): ?>
          <div style="display:flex;gap:16px;padding:16px;background:rgba(255,255,255,.06);border-radius:var(--radius);border:1px solid rgba(255,255,255,.1)">
            <div style="font-size:24px;flex-shrink:0"><?= $f[0] ?></div>
            <div>
              <div style="font-weight:700;font-size:15px;margin-bottom:4px"><?= $f[1] ?></div>
              <div style="font-size:13px;color:rgba(255,255,255,.6)"><?= $f[2] ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <hr style="border:none;border-top:1px solid var(--clr-border);margin-bottom:96px">

    <!-- Франшизы -->
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center" class="fade-up fw-grid">
      <div>
        <span class="label">Франшизы</span>
        <h2 class="headline" style="margin:16px 0">CRM для<br>всей франшизы</h2>
        <p style="color:var(--clr-text-2);font-size:17px;line-height:1.7;margin-bottom:28px">
          Внедрите единый стандарт лояльности во всех точках франшизы. Владелец бренда управляет программами и акциями. Каждый партнёр видит результаты своей точки.
        </p>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:14px;margin-bottom:32px">
          <?php foreach(['Брендированная программа лояльности','Единые правила для всех партнёров','Партнёр видит только свои данные','Франчайзер видит аналитику по всем','Быстрое подключение новых точек','Стандартизированное обучение персонала'] as $f): ?>
          <li style="display:flex;gap:12px;align-items:flex-start;font-size:15px;color:var(--clr-text-2)">
            <span style="width:22px;height:22px;background:var(--clr-accent-lt);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--clr-accent);font-size:12px;font-weight:700;flex-shrink:0;margin-top:1px">✓</span>
            <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <button class="btn btn-primary" onclick="openModal('modal-demo')">Запустить во франшизе →</button>
      </div>
      <div>
        <div style="background:var(--clr-accent-lt);border:1px solid rgba(37,99,235,.2);border-radius:var(--radius-xl);padding:32px">
          <div style="font-weight:700;font-size:16px;margin-bottom:20px;color:var(--clr-accent)">Структура доступа во франшизе</div>
          <div style="display:flex;flex-direction:column;gap:12px">
            <?php foreach([
              ['<svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h.5" /><path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138" />
</svg>','Франчайзер','Полная аналитика всех точек, управление акциями и программой','var(--clr-accent)'],
              ['<svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 12v-4" /><path d="M15 12v-2" /><path d="M12 12v-1" /><path d="M3 4h18" /><path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" /><path d="M12 16v4" /><path d="M9 20h6" />
</svg>','Региональный менеджер','Аналитика по своему региону, акции для региона','#8B5CF6'],
              ['<svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M5 21v-14l8 -4v18" /><path d="M19 21v-10l-6 -4" /><path d="M9 9l0 .01" /><path d="M9 12l0 .01" /><path d="M9 15l0 .01" /><path d="M9 18l0 .01" />
</svg>','Партнёр-франчайзи','Аналитика своей точки, работа с клиентами','var(--clr-success)'],
              ['<svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
</svg>','Кассир','Подсказки на кассе, начисление баллов','var(--clr-text-muted)'],
            ] as $r): ?>
            <div style="display:flex;gap:12px;align-items:flex-start;padding:14px 16px;background:#fff;border-radius:var(--radius);border-left:3px solid <?= $r[3] ?>">
              <span style="font-size:18px"><?= $r[0] ?></span>
              <div>
                <div style="font-weight:700;font-size:14px;color:<?= $r[3] ?>"><?= $r[1] ?></div>
                <div style="font-size:12px;color:var(--clr-text-muted);margin-top:2px"><?= $r[2] ?></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

    <style>@media(max-width:768px){.fw-grid{grid-template-columns:1fr!important}.fw-grid>div{order:unset!important}}</style>
  </div>
</section>

<section class="cta">
  <div class="container">
    <h2 class="headline">Найдём решение для вашего бизнеса</h2>
    <p>Расскажите о своей задаче — покажем, как CRM4Retail поможет</p>
    <button class="btn btn-white btn-lg" onclick="openModal('modal-demo')">Получить демо →</button>
  </div>
</section>

<?php require_once 'php/footer.php'; ?>

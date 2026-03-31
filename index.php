<?php
$pageTitle = 'CRM4Retail — CRM для роста продаж в рознице | Хэдлайн';
$pageDesc = 'CRM4Retail анализирует покупки клиентов и помогает продавцам продавать больше. Сегментация, бонусы, автоматические акции, подсказки кассирам.';
$currentPage = '';
require_once 'php/header.php';
?>

<!-- ═══════════════════════════════════════════
     HERO
════════════════════════════════════════════ -->
<section class="hero" id="home">
  <div class="hero__bg"></div>
  <div class="container">
      <!-- Content -->
      <div class="hero__content">
        <h1 class="display fade-up">
          CRM для роста ..<br>продаж в <span class="accent">рознице</span>
        </h1>
        <p class="hero__sub fade-up">
          CRM4Retail анализирует покупки клиентов и помогает продавцам продавать больше — автоматически.
        </p>
        <div class="hero__actions fade-up">
          <button class="btn btn-primary btn-lg" onclick="openModal('modal-demo')">
            Получить демо
            <span>→</span>
          </button>
          <a href="#features" class="btn btn-ghost btn-lg">Узнать больше</a>
        </div>
        <div class="hero__stats fade-up">
          <div>
            <div class="hero__stat-num">+34%</div>
            <div class="hero__stat-label">рост повторных покупок</div>
          </div>
          <div>
            <div class="hero__stat-num">×2.4</div>
            <div class="hero__stat-label">конверсия кассиров</div>
          </div>
          <div>
            <div class="hero__stat-num">150+</div>
            <div class="hero__stat-label">магазинов используют</div>
          </div>
        </div>
      </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     PROBLEM
════════════════════════════════════════════ -->
<section class="problem" id="problem">
  <div class="container">
    <div class="problem__grid">
      <div>
        <span class="problem__label">Проблема</span>
        <h2 class="headline">Бизнес теряет деньги,<br>не зная своих клиентов</h2>
        <p class="problem__lead">Без CRM каждый покупатель — незнакомец. Вы не знаете, кто к вам приходит, что покупает и почему уходит к конкурентам.</p>
      </div>
      <div class="problem__items">
        <div class="problem__item fade-up">
          <div class="problem__item-icon">
            <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" /><path d="M19 22v.01" /><path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
            </svg>
          </div>
          <div>
            <div class="problem__item-text">Не знаете, кто ваши клиенты</div>
            <div class="problem__item-sub">Нет данных о поле, возрасте, предпочтениях покупателей</div>
          </div>
        </div>
        <div class="problem__item fade-up">
          <div class="problem__item-icon">
            <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M15 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" />
            </svg>
          </div>
          <div>
            <div class="problem__item-text">Не помните, что они покупают</div>
            <div class="problem__item-sub">История покупок нигде не сохраняется и не анализируется</div>
          </div>
        </div>
        <div class="problem__item fade-up">
          <div class="problem__item-icon">
            <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 6l4 -4l8 8" /><path d="M21 10l0 7l-7 0" />
            </svg>
          </div>
          <div>
            <div class="problem__item-text">Не можете вернуть их снова</div>
            <div class="problem__item-sub">Нет инструментов для стимулирования повторных покупок</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     FEATURES
════════════════════════════════════════════ -->
<section class="section" id="features">
  <div class="container">
    <div class="section-header">
      <span class="label">Возможности</span>
      <h2 class="headline">Всё, что нужно для роста продаж</h2>
      <p>CRM4Retail — четыре мощных инструмента в одной платформе</p>
    </div>
    <div class="features__grid">
      <div class="feature-card fade-up">
        <div class="feature-card__icon">
          <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 7a5 5 0 1 0 5 5" /><path d="M13 3.055a9 9 0 1 0 7.941 7.945" /><path d="M15 6v3h3l3 -3h-3v-3l-3 3" /><path d="M15 9l-3 3" />
          </svg>
        </div>
        <h3>Сегментация клиентов</h3>
        <p>Система автоматически делит покупателей на сегменты по частоте визитов, среднему чеку и предпочтениям. Вы всегда знаете, кто ваш VIP, а кто давно не приходил.</p>
        <span class="feature-card__tag">AI-анализ</span>
      </div>
      <div class="feature-card fade-up">
        <div class="feature-card__icon">
          <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
          </svg>
        </div>
        <h3>Бонусная программа</h3>
        <p>Гибкая система лояльности: баллы за покупки, кешбэк, привилегии для постоянных клиентов. Настройте за 10 минут и наблюдайте, как клиенты возвращаются снова.</p>
        <span class="feature-card__tag">Лояльность</span>
      </div>
      <div class="feature-card fade-up">
        <div class="feature-card__icon">
          <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 9a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1l0 -2" /><path d="M12 8l0 13" /><path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" /><path d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" />
          </svg>
        </div>
        <h3>Персональные акции</h3>
        <p>CRM4Retail запускает акции автоматически — нужному сегменту, в нужное время. «Давно не видели вас» или «Поздравляем с Днём Рождения» — всё без участия менеджера.</p>
        <span class="feature-card__tag">Авто-маркетинг</span>
      </div>
      <div class="feature-card fade-up">
        <div class="feature-card__icon">
          <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7" /><path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3" /><path d="M9.7 17l4.6 0" />
          </svg>
        </div>
        <h3>Подсказки на кассе</h3>
        <p>Кассир видит на экране: «Предложите этому клиенту молоко — он берёт его каждый четверг». Персональные рекомендации увеличивают средний чек на 18–25%.</p>
        <span class="feature-card__tag">Upsell</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     HOW IT WORKS
════════════════════════════════════════════ -->
<section class="section how" id="how">
  <div class="container">
    <div class="section-header">
      <span class="label">Как это работает</span>
      <h2 class="headline">От покупки до роста продаж<br>— автоматически</h2>
    </div>
    <div class="how__steps">
      <div class="how__step fade-up">
        <div class="how__step-num">01</div>
        <h3>Клиент покупает</h3>
        <p>Покупатель идентифицируется по карте или номеру телефона. Покупка записывается в базу.</p>
      </div>
      <div class="how__step fade-up">
        <div class="how__step-num">02</div>
        <h3>CRM анализирует</h3>
        <p>Система формирует профиль клиента: что покупает, как часто, в какое время, средний чек.</p>
      </div>
      <div class="how__step fade-up">
        <div class="how__step-num">03</div>
        <h3>Запускает акции</h3>
        <p>Автоматически отправляет персональные предложения: SMS, push или через кассира.</p>
      </div>
      <div class="how__step fade-up">
        <div class="how__step-num">04</div>
        <h3>Клиент возвращается</h3>
        <p>Покупатель видит выгоду и возвращается. Продажи растут без дополнительных затрат на рекламу.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     FOR WHOM
════════════════════════════════════════════ -->
<section class="section" id="forwhom">
  <div class="container">
    <div class="section-header">
      <span class="label">Для кого</span>
      <h2 class="headline">CRM4Retail подходит любому<br>розничному бизнесу</h2>
    </div>
    <div class="forwhom__grid">
      <div class="forwhom-card fade-up">
        <div class="forwhom-card__icon">
          <svg class="icon icon-md-w" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" /><path d="M5 21l0 -10.15" /><path d="M19 21l0 -10.15" /><path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
          </svg>
        </div>
        <h3>Розничные магазины</h3>
        <p>Один магазин или небольшая сеть — CRM4Retail адаптируется под ваш масштаб и начинает работать с первого дня.</p>
        <ul class="forwhom-card__list">
          <li>Быстрое подключение от 2 дней</li>
          <li>Интеграция с кассовым ПО</li>
          <li>Прозрачная аналитика</li>
          <li>Поддержка 24/7</li>
        </ul>
      </div>
      <div class="forwhom-card fade-up">
        <div class="forwhom-card__icon">
          <svg class="icon icon-md-w" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M9 8l1 0" /><path d="M9 12l1 0" /><path d="M9 16l1 0" /><path d="M14 8l1 0" /><path d="M14 12l1 0" /><path d="M14 16l1 0" /><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
          </svg>
        </div>
        <h3>Розничные сети</h3>
        <p>Управляйте лояльностью клиентов сразу во всех точках. Единая база, сквозная аналитика, централизованные акции.</p>
        <ul class="forwhom-card__list">
          <li>Единая база клиентов</li>
          <li>Управление из одного кабинета</li>
          <li>Аналитика по каждой точке</li>
          <li>API для интеграций</li>
        </ul>
      </div>
      <div class="forwhom-card fade-up">
        <div class="forwhom-card__icon">
          <svg class="icon icon-md-w" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M5 21v-14l8 -4v18" /><path d="M19 21v-10l-6 -4" /><path d="M9 9l0 .01" /><path d="M9 12l0 .01" /><path d="M9 15l0 .01" /><path d="M9 18l0 .01" />
          </svg>
        </div>
        <h3>Франшизы</h3>
        <p>Единые стандарты лояльности для всех франчайзи. Владелец сети контролирует акции и программы, партнёры — свои точки.</p>
        <ul class="forwhom-card__list">
          <li>Разграничение прав доступа</li>
          <li>Брендированные программы</li>
          <li>Отчётность для франчайзеров</li>
          <li>Подключение новых точек за 1 день</li>
        </ul>
      </div>
    </div>
    <div style="text-align:center;margin-top:40px">
      <a href="for-whom.php" class="btn btn-outline">Подробнее о вашем типе бизнеса →</a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     CASES PREVIEW 
════════════════════════════════════════════ -->
<section class="section" style="background:var(--clr-surface2)" id="cases">
  <div class="container">
    <div class="section-header">
      <span class="label">Реальные кейсы</span>
      <h2 class="headline">Результаты наших клиентов</h2>
      <p>Увеличение чека, рост лояльности и автоматизация маркетинга — цифры, которые говорят сами за себя</p>
    </div>
    <div class="cases__grid">
      <!-- Кейс 1: Супермаркеты Гастроном -->
      <div class="case-card fade-up">
        <div class="case-card__img">
          <img 
            src="/img/cases/gastronom.jpg" 
            alt="Супермаркеты Гастроном — сеть продуктовых магазинов" 
            class="case-card__photo"
            loading="lazy"
            width="400"
            height="240"
            onerror="this.src='/img/placeholder-store.jpg'"
          >
        </div>
        <div class="case-card__body">
          <span class="case-card__tag" style="color:#10B981">Продукты</span>
          <h3 class="case-card__company" style="font-size: 1.25rem; font-weight: 700; margin: 8px 0 4px;">Супермаркеты Гастроном</h3>
          <p class="case-card__desc">Сеть супермаркетов. Внедрили бонусную систему вместо скидок, получили рост чека и прозрачную аналитику.</p>
          <div class="case-card__results">
            <div class="case-card__result"><span>Средний чек</span><span class="case-card__result-val" style="color:#10B981">+10-15%</span></div>
            <div class="case-card__result"><span>Бонусная система</span><span class="case-card__result-val" style="color:#10B981">внедрена</span></div>
          </div>
        </div>
      </div>

      <!-- Кейс 2: Питьсбург -->
      <div class="case-card fade-up">
        <div class="case-card__img">
          <img 
            src="/img/cases/pitesburg.jpg" 
            alt="Питьсбург — сеть магазинов разливных напитков" 
            class="case-card__photo"
            loading="lazy"
            width="400"
            height="240"
            onerror="this.src='/img/placeholder-drinks.jpg'"
          >
        </div>
        <div class="case-card__body">
          <span class="case-card__tag" style="color:#8B5CF6">Напитки</span>
          <h3 class="case-card__company" style="font-size: 1.25rem; font-weight: 700; margin: 8px 0 4px;">Питьсбург</h3>
          <p class="case-card__desc">40 магазинов разливных напитков. Конверсия рассылок выросла с 0,5% до 7% после интеграции CRM.</p>
          <div class="case-card__results">
            <div class="case-card__result"><span>Средний чек</span><span class="case-card__result-val" style="color:#8B5CF6">+20%</span></div>
            <div class="case-card__result"><span>Конверсия рассылок</span><span class="case-card__result-val" style="color:#8B5CF6">0,5% → 7%</span></div>
          </div>
        </div>
      </div>

      <!-- Кейс 3: Coffee Like -->
      <div class="case-card fade-up">
        <div class="case-card__img">
          <img 
            src="/img/cases/coffeelike.jpg" 
            alt="Coffee Like — федеральная сеть кофеен" 
            class="case-card__photo"
            loading="lazy"
            width="400"
            height="240"
            onerror="this.src='/img/placeholder-coffee.jpg'"
          >
        </div>
        <div class="case-card__body">
          <span class="case-card__tag" style="color:#F59E0B">HoReCa</span>
          <h3 class="case-card__company" style="font-size: 1.25rem; font-weight: 700; margin: 8px 0 4px;">Coffee Like</h3>
          <p class="case-card__desc">900 кофеен. Упростили коммуникацию с клиентами через push-уведомления, рост выручки у франчайзи.</p>
          <div class="case-card__results">
            <div class="case-card__result"><span>Выручка франчайзи</span><span class="case-card__result-val" style="color:#F59E0B">+15%</span></div>
            <div class="case-card__result"><span>Интеграция</span><span class="case-card__result-val" style="color:#F59E0B">iiko + web-приложение</span></div>
          </div>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:40px">
      <a href="cases.php" class="btn btn-outline">Все кейсы →</a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     CTA
════════════════════════════════════════════ -->
<section class="cta" id="cta">
  <div class="container">
    <span class="label" style="color:rgba(255,255,255,.7);display:block;margin-bottom:16px">Начните сейчас</span>
    <h2 class="headline">Попробуйте CRM4Retail<br>бесплатно 14 дней</h2>
    <p>Настройка за 2 дня. Без скрытых платежей. Менеджер поможет с внедрением.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
      <button class="btn btn-white btn-lg" onclick="openModal('modal-demo')">Получить демо CRM</button>
      <a href="pricing.php" class="btn btn-lg" style="background:rgba(255,255,255,.15);color:#fff;border:1.5px solid rgba(255,255,255,.3)">Посмотреть цены</a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     FAQ
════════════════════════════════════════════ -->
<section class="section" id="faq">
  <div class="container">
    <div class="section-header">
      <span class="label">Частые вопросы</span>
      <h2 class="headline">Ответы на популярные вопросы</h2>
    </div>
    <div class="faq__list">
      <div class="faq__item">
        <div class="faq__q">
          Как быстро происходит внедрение CRM4Retail?
          <span class="faq__q-icon">+</span>
        </div>
        <div class="faq__a">
          <div class="faq__a-inner">
            Стандартное внедрение занимает 2–5 рабочих дней. За это время мы подключаем систему к вашей кассе, настраиваем профиль бонусной программы и обучаем персонал. Для крупных сетей сроки могут быть больше — обсуждаем индивидуально.
          </div>
        </div>
      </div>
      <div class="faq__item">
        <div class="faq__q">
          С какими кассовыми программами работает CRM4Retail?
          <span class="faq__q-icon">+</span>
        </div>
        <div class="faq__a">
          <div class="faq__a-inner">
            CRM4Retail интегрируется с популярными кассовыми решениями: 1С:Розница, АТОЛ, Эвотор, Frontol, Iiko и другими. Если вашей кассы нет в списке — разработаем интеграцию в рамках проекта.
          </div>
        </div>
      </div>
      <div class="faq__item">
        <div class="faq__q">
          Нужен ли интернет для работы на кассе?
          <span class="faq__q-icon">+</span>
        </div>
        <div class="faq__a">
          <div class="faq__a-inner">
            Касса работает в офлайн-режиме. Данные о покупках синхронизируются с облаком при появлении соединения. Это исключает сбои в работе из-за проблем с интернетом.
          </div>
        </div>
      </div>
      <div class="faq__item">
        <div class="faq__q">
          Как клиенты идентифицируются на кассе?
          <span class="faq__q-icon">+</span>
        </div>
        <div class="faq__a">
          <div class="faq__a-inner">
            Несколько способов: пластиковая карта с штрих-кодом, виртуальная карта в приложении, номер телефона. Можно использовать один или несколько способов одновременно.
          </div>
        </div>
      </div>
      <div class="faq__item">
        <div class="faq__q">
          Соответствует ли система требованиям 152-ФЗ?
          <span class="faq__q-icon">+</span>
        </div>
        <div class="faq__a">
          <div class="faq__a-inner">
            Да. CRM4Retail полностью соответствует требованиям Федерального закона «О персональных данных». Данные хранятся на российских серверах, передача зашифрована, права на обработку оформляются через согласие клиента.
          </div>
        </div>
      </div>
      <div class="faq__item">
        <div class="faq__q">
          Есть ли пробный период?
          <span class="faq__q-icon">+</span>
        </div>
        <div class="faq__a">
          <div class="faq__a-inner">
            Да! После получения демо мы предоставляем 14 дней бесплатного доступа ко всем функциям системы. За это время вы сможете оценить возможности CRM4Retail без каких-либо обязательств.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     DEMO FORM BOTTOM
════════════════════════════════════════════ -->
<section class="section demo-section" id="demo">
  <div class="container">
    <div class="section-header">
      <span class="label">Демо</span>
      <h2 class="headline">Получите демо CRM4Retail</h2>
      <p>Заполните форму — менеджер свяжется с вами в течение 30 минут</p>
    </div>
    <div class="demo-form-wrap">
      <div class="demo-form">
        <form id="form-demo-2">
          <input type="hidden" name="csrf_token" value="<?= csrf_token() ?>">
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">Ваше имя <span class="req">*</span></label>
              <input type="text" name="name" class="form-control" placeholder="Иван Иванов" required>
            </div>
            <div class="form-group">
              <label class="form-label">Телефон <span class="req">*</span></label>
              <input type="tel" name="phone" class="form-control" placeholder="+7 (999) 000-00-00" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">Город <span class="req">*</span></label>
              <input type="text" name="city" class="form-control" placeholder="Ижевск" required>
            </div>
            <div class="form-group">
              <label for="points_count" class="form-label">Количество точек <span class="req">*</span></label>
              <select id="points_count" name="points_count" class="form-control" required>
                <option value="">Выберите</option>
                <option value="1">1 точка</option>
                <option value="2-5">2–5 точек</option>
                <option value="6-20">6–20 точек</option>
                <option value="21-50">21–50 точек</option>
                <option value="50+">Более 50 точек</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="retail_profile" class="form-label">Профиль розницы <span class="req">*</span></label>
            <select id="retail_profile" name="retail_profile" class="form-control" required>
              <option value="">Что именно продаёте?</option>
              <option value="products">Продукты питания</option>
              <option value="clothes">Одежда и обувь</option>
              <option value="pharma">Аптека / здоровье</option>
              <option value="electronics">Электроника</option>
              <option value="beauty">Красота / косметика</option>
              <option value="sport">Спортивные товары</option>
              <option value="hardware">Стройматериалы / хозтовары</option>
              <option value="other">Другое</option>
            </select>
          </div>
          <div class="form-success" id="demo-2-success"></div>
          <button type="submit" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;margin-top:8px">
            Отправить заявку на демо →
          </button>
          <p style="font-size:12px;color:var(--clr-text-muted);text-align:center;margin-top:12px">
            Нажимая кнопку, вы соглашаетесь с <a href="privacy.php">политикой конфиденциальности</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
// Inline demo form 2
document.getElementById('form-demo-2')?.addEventListener('submit', async function(e) {
  e.preventDefault();
  const data = new FormData(this);
  data.set('action', 'demo');
  const btn = this.querySelector('[type="submit"]');
  btn.disabled = true; btn.textContent = 'Отправляем…';
  try {
    const res = await fetch('php/form_handler.php', {method:'POST', body:data});
    const json = await res.json();
    const s = document.getElementById('demo-2-success');
    if (json.success) { this.style.display='none'; s.style.display='block'; s.textContent = json.message; }
    else { showToast(json.message, 'error'); btn.disabled=false; btn.textContent='Отправить заявку на демо →'; }
  } catch { showToast('Ошибка соединения','error'); }
});
</script>

<?php require_once 'php/footer.php'; ?>

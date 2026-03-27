<?php
$pageTitle = 'Цены и внедрение CRM4Retail — рассчитайте стоимость';
$pageDesc = 'Узнайте стоимость внедрения CRM4Retail для вашего бизнеса. Пройдите короткий квиз и получите персональный расчёт.';
$currentPage = 'pricing';
require_once 'php/header.php';
?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Главная</a>
      <span class="breadcrumb__sep">/</span>
      <span>Цены и внедрение</span>
    </div>
    <span class="label">Стоимость</span>
    <h1 class="headline">Цены и внедрение</h1>
    <p class="lead" style="max-width:560px;margin-top:16px">Заполните короткий квиз, чтобы получить персональный расчёт стоимости. После отправки данных наш менеджер свяжется с вами.</p>
  </div>
</div>

<!-- Pricing tiers -->
<section class="section--sm section">
  <div class="container">
    <div class="section-header">
      <span class="label">Тарифы</span>
      <h2 class="headline">Прозрачное ценообразование</h2>
      <p>Стоимость зависит от количества точек и необходимых функций</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px" class="pricing-tiers">
      <div style="background:var(--clr-surface);border:1px solid var(--clr-border);border-radius:var(--radius-lg);padding:36px;text-align:center" class="fade-up">
        <div style="font-size:13px;font-weight:600;color:var(--clr-text-muted);margin-bottom:16px;font-family:var(--font-mono);text-transform:uppercase;letter-spacing:.1em">Старт</div>
        <div style="font-size:42px;font-weight:900;letter-spacing:-.04em;color:var(--clr-text)">от 3 990 ₽</div>
        <div style="color:var(--clr-text-muted);font-size:13px;margin-bottom:24px">в месяц / 1–3 точки</div>
        <ul style="list-style:none;text-align:left;display:flex;flex-direction:column;gap:12px;margin-bottom:32px">
          <?php foreach(['Сегментация клиентов','Бонусная программа','Базовая аналитика','Подключение 1–3 касс','Поддержка по email'] as $f): ?>
          <li style="font-size:14px;color:var(--clr-text-2);display:flex;gap:10px">
            <span style="color:var(--clr-success);font-weight:700">✓</span> <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <button class="btn btn-outline" style="width:100%;justify-content:center" onclick="openModal('modal-demo')">Получить демо</button>
      </div>

      <div style="background:var(--clr-accent);border:1px solid var(--clr-accent);border-radius:var(--radius-lg);padding:36px;text-align:center;position:relative;transform:scale(1.04)" class="fade-up">
        <div style="position:absolute;top:-14px;left:50%;transform:translateX(-50%);background:var(--clr-warn);color:#fff;padding:4px 16px;border-radius:100px;font-size:12px;font-weight:700">ПОПУЛЯРНЫЙ</div>
        <div style="font-size:13px;font-weight:600;color:rgba(255,255,255,.7);margin-bottom:16px;font-family:var(--font-mono);text-transform:uppercase;letter-spacing:.1em">Бизнес</div>
        <div style="font-size:42px;font-weight:900;letter-spacing:-.04em;color:#fff">от 9 990 ₽</div>
        <div style="color:rgba(255,255,255,.65);font-size:13px;margin-bottom:24px">в месяц / 4–20 точек</div>
        <ul style="list-style:none;text-align:left;display:flex;flex-direction:column;gap:12px;margin-bottom:32px">
          <?php foreach(['Все функции тарифа Старт','Персональные акции','Подсказки кассирам','SMS и push-уведомления','Расширенная аналитика','Поддержка 24/7'] as $f): ?>
          <li style="font-size:14px;color:rgba(255,255,255,.85);display:flex;gap:10px">
            <span style="color:rgba(255,255,255,.9);font-weight:700">✓</span> <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <button class="btn btn-white" style="width:100%;justify-content:center" onclick="openModal('modal-demo')">Получить демо</button>
      </div>

      <div style="background:var(--clr-surface);border:1px solid var(--clr-border);border-radius:var(--radius-lg);padding:36px;text-align:center" class="fade-up">
        <div style="font-size:13px;font-weight:600;color:var(--clr-text-muted);margin-bottom:16px;font-family:var(--font-mono);text-transform:uppercase;letter-spacing:.1em">Сеть / Франшиза</div>
        <div style="font-size:42px;font-weight:900;letter-spacing:-.04em;color:var(--clr-text)">Индивид.</div>
        <div style="color:var(--clr-text-muted);font-size:13px;margin-bottom:24px">от 21 точки</div>
        <ul style="list-style:none;text-align:left;display:flex;flex-direction:column;gap:12px;margin-bottom:32px">
          <?php foreach(['Все функции тарифа Бизнес','Многоуровневый доступ','Брендированная программа','API и интеграции','Выделенный менеджер','SLA по договору'] as $f): ?>
          <li style="font-size:14px;color:var(--clr-text-2);display:flex;gap:10px">
            <span style="color:var(--clr-success);font-weight:700">✓</span> <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="document.getElementById('quiz-section').scrollIntoView({behavior:'smooth'})">Рассчитать стоимость</button>
      </div>
    </div>

    <style>
    @media(max-width:768px){.pricing-tiers{grid-template-columns:1fr!important}}
    </style>
  </div>
</section>

<!-- Quiz -->
<section class="section pricing" id="quiz-section">
  <div class="container">
    <div class="section-header">
      <span class="label">Квиз</span>
      <h2 class="headline">Рассчитайте стоимость<br>для вашего бизнеса</h2>
      <p>Ответьте на 5 вопросов — получите персональный расчёт</p>
    </div>

    <div id="quiz-success" style="display:none;max-width:500px;margin:0 auto;padding:40px;text-align:center;background:var(--clr-surface);border-radius:var(--radius-xl);border:1px solid var(--clr-border);box-shadow:var(--shadow-lg)">
      <div style="font-size:56px;margin-bottom:20px">✅</div>
      <h3 style="margin-bottom:12px">Данные отправлены!</h3>
      <p style="color:var(--clr-text-2)">Ваши ответы переданы нашим менеджерам на рассмотрение. Специалист свяжется с вами в течение рабочего дня и подготовит персональное коммерческое предложение.</p>
    </div>

    <form class="quiz" id="quiz-form" novalidate>
      <input type="hidden" name="csrf_token" value="<?= csrf_token() ?>">

      <!-- Progress -->
      <div class="quiz__progress">
        <div class="quiz__progress-step active"></div>
        <div class="quiz__progress-step"></div>
        <div class="quiz__progress-step"></div>
        <div class="quiz__progress-step"></div>
        <div class="quiz__progress-step"></div>
      </div>

      <!-- Step 1 -->
      <div class="quiz__step active" data-field="retail_profile">
        <div class="quiz__step-num">Шаг 1 из 5</div>
        <h3>Что вы продаёте?</h3>
        <div class="quiz__options">
          <button type="button" class="quiz__option" data-val="products"><svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M15 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" />
</svg> Продукты питания</button>
          <button type="button" class="quiz__option" data-val="clothes"><svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
</svg> Одежда и обувь</button>
          <button type="button" class="quiz__option" data-val="pharma"><svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 8.866l-2.733 -2.734a3.866 3.866 0 0 0 -5.467 5.467l2.733 2.734l5.467 5.467l8.202 -8.201a3.866 3.866 0 0 0 -5.469 -5.466l-8.201 8.2" />
</svg> Аптека / здоровье</button>
          <button type="button" class="quiz__option" data-val="electronics"><svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14" /><path d="M11 4h2" /><path d="M12 17v.01" />
</svg> Электроника</button>
          <button type="button" class="quiz__option" data-val="beauty"><svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 5h12l3 5l-8.5 9.5a.7 .7 0 0 1 -1 0l-8.5 -9.5l3 -5" /><path d="M10 12l-2 -2.2l.6 -1" />
</svg> Красота / косметика</button>
          <button type="button" class="quiz__option" data-val="other"><svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /><path d="M16 5.25l-8 4.5" />
</svg> Другое</button>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="quiz__step" data-field="points_count">
        <div class="quiz__step-num">Шаг 2 из 5</div>
        <h3>Сколько у вас торговых точек?</h3>
        <div class="quiz__options">
          <button type="button" class="quiz__option" data-val="1">1 точка</button>
          <button type="button" class="quiz__option" data-val="2-5">2–5 точек</button>
          <button type="button" class="quiz__option" data-val="6-20">6–20 точек</button>
          <button type="button" class="quiz__option" data-val="21-50">21–50 точек</button>
          <button type="button" class="quiz__option" data-val="50+">Более 50 точек</button>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="quiz__step" data-field="has_crm">
        <div class="quiz__step-num">Шаг 3 из 5</div>
        <h3>Есть ли сейчас CRM или программа лояльности?</h3>
        <div class="quiz__options">
          <button type="button" class="quiz__option" data-val="no">Нет, начинаем с нуля</button>
          <button type="button" class="quiz__option" data-val="partially">Есть кое-что, хотим улучшить</button>
          <button type="button" class="quiz__option" data-val="yes">Есть, хотим заменить</button>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="quiz__step" data-field="monthly_customers">
        <div class="quiz__step-num">Шаг 4 из 5</div>
        <h3>Сколько уникальных покупателей в месяц?</h3>
        <div class="quiz__options">
          <button type="button" class="quiz__option" data-val="less-500">До 500</button>
          <button type="button" class="quiz__option" data-val="500-2000">500–2 000</button>
          <button type="button" class="quiz__option" data-val="2000-10000">2 000–10 000</button>
          <button type="button" class="quiz__option" data-val="10000+">Более 10 000</button>
        </div>
      </div>

      <!-- Step 5: Contact -->
      <div class="quiz__step active-last">
        <div class="quiz__step-num">Шаг 5 из 5</div>
        <h3>Куда отправить расчёт?</h3>
        <div class="form-row" style="margin-bottom:16px">
          <div class="form-group" style="margin-bottom:0">
            <label class="form-label">Ваше имя <span class="req">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="Иван Иванов" required>
          </div>
          <div class="form-group" style="margin-bottom:0">
            <label class="form-label">Телефон <span class="req">*</span></label>
            <input type="tel" name="phone" class="form-control" placeholder="+7 (999) 000-00-00" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group" style="margin-bottom:0">
            <label class="form-label">Город <span class="req">*</span></label>
            <input type="text" name="city" class="form-control" placeholder="Ижевск" required>
          </div>
          <div class="form-group" style="margin-bottom:0">
            <label class="form-label">Бюджет</label>
            <select name="budget" class="form-control">
              <option value="">Не определён</option>
              <option value="less-10k">До 10 000 ₽/мес</option>
              <option value="10-30k">10 000–30 000 ₽/мес</option>
              <option value="30-100k">30 000–100 000 ₽/мес</option>
              <option value="100k+">Более 100 000 ₽/мес</option>
            </select>
          </div>
        </div>
      </div>

      <div class="quiz__nav" style="margin-top:28px">
        <button type="button" class="btn btn-ghost btn-quiz-prev" style="visibility:hidden">← Назад</button>
        <button type="button" class="btn btn-primary btn-quiz-next">Далее →</button>
      </div>
      <p class="quiz__info">После отправки квиза данные передаются менеджеру на рассмотрение. Специалист свяжется с вами в течение рабочего дня.</p>
    </form>
  </div>
</section>

<script>
// Enhanced quiz for pricing page 
(function(){
  const quiz = document.getElementById('quiz-form');
  if (!quiz) return;
  
  let step = 1;
  const total = 5;
  const steps = quiz.querySelectorAll('.quiz__step');
  const prevBtn = quiz.querySelector('.btn-quiz-prev');
  const nextBtn = quiz.querySelector('.btn-quiz-next');
  const progress = quiz.querySelectorAll('.quiz__progress-step');
  const quizData = {};
  
  // Флаг для предотвращения двойной отправки
  let isSubmitting = false;

  function updateUI() {
    steps.forEach((s, i) => s.classList.toggle('active', i + 1 === step));
    progress.forEach((p, i) => {
      p.classList.toggle('done', i < step - 1);
      p.classList.toggle('active', i === step - 1);
    });
    
    prevBtn.style.visibility = step > 1 ? 'visible' : 'hidden';
    
    if (step === total) {
      nextBtn.style.display = 'none';
      
      // Проверяем, существует ли уже кнопка отправки
      let sub = quiz.querySelector('.btn-quiz-submit');
      if (!sub) {
        sub = document.createElement('button');
        sub.type = 'submit';
        sub.className = 'btn btn-primary btn-quiz-submit';
        sub.textContent = 'Отправить и получить расчёт →';
        quiz.querySelector('.quiz__nav').appendChild(sub);
      } else {
        // Если кнопка уже есть, просто показываем её
        sub.style.display = '';
      }
    } else {
      nextBtn.style.display = '';
      const sub = quiz.querySelector('.btn-quiz-submit');
      if (sub) sub.style.display = 'none';
    }
  }

  quiz.querySelectorAll('.quiz__option').forEach(opt => {
    opt.addEventListener('click', function() {
      this.closest('.quiz__step').querySelectorAll('.quiz__option').forEach(o => o.classList.remove('selected'));
      this.classList.add('selected');
      const field = this.closest('.quiz__step').dataset.field;
      if (field) quizData[field] = this.dataset.val;
    });
  });

  nextBtn.addEventListener('click', () => { 
    if (step < total) { 
      step++; 
      updateUI(); 
    } 
  });
  
  prevBtn.addEventListener('click', () => { 
    if (step > 1) { 
      step--; 
      updateUI(); 
    } 
  });

  // Удаляем старый обработчик, если он был
  const oldSubmitHandler = quiz._submitHandler;
  if (oldSubmitHandler) {
    quiz.removeEventListener('submit', oldSubmitHandler);
  }

  // Новый обработчик с защитой от двойной отправки
  const submitHandler = async function(e) {
    e.preventDefault();
    
    // Защита от двойной отправки
    if (isSubmitting) {
      console.log('Предотвращена двойная отправка');
      return;
    }
    
    isSubmitting = true;
    
    const data = new FormData(this);
    Object.entries(quizData).forEach(([k, v]) => data.set(k, v));
    data.set('action', 'price');
    const btn = this.querySelector('.btn-quiz-submit');
    
    if (!btn) {
      isSubmitting = false;
      return;
    }
    
    const originalText = btn.textContent;
    btn.disabled = true; 
    btn.textContent = 'Отправляем…';
    
    try {
      const res = await fetch('php/form_handler.php', {method:'POST', body:data});
      const json = await res.json();
      
      if (json.success) {
        this.style.display = 'none';
        const successEl = document.getElementById('quiz-success');
        if (successEl) {
          successEl.style.display = 'block';
          successEl.scrollIntoView({behavior:'smooth', block:'center'});
        }
      } else {
        if (typeof showToast === 'function') {
          showToast(json.message || 'Ошибка', 'error');
        } else {
          alert(json.message || 'Ошибка');
        }
        btn.disabled = false; 
        btn.textContent = originalText;
        isSubmitting = false; // Сбрасываем флаг только при ошибке
      }
    } catch (error) {
      console.error('Ошибка:', error);
      if (typeof showToast === 'function') {
        showToast('Ошибка соединения', 'error');
      } else {
        alert('Ошибка соединения');
      }
      btn.disabled = false; 
      btn.textContent = originalText;
      isSubmitting = false; // Сбрасываем флаг при ошибке
    }
  };

  // Сохраняем обработчик для возможного удаления
  quiz._submitHandler = submitHandler;
  quiz.addEventListener('submit', submitHandler);

  updateUI();
})();
</script>

<?php require_once 'php/footer.php'; ?>

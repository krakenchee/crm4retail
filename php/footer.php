<!-- ── Chat FAB ───────────────────────────── -->
<div class="chat-fab" id="chatFab">
  <div class="chat-fab__menu">
    <a href="https://t.me/vddheadline" target="_blank" rel="noopener" class="chat-fab__item">
      <span class="chat-fab__item-icon tg-icon">
        <svg class="icon icon-md" stroke="#ffffff" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
        </svg>
      </span>
      Telegram
    </a>
    <a href="https://wa.me/79827971631" target="_blank" rel="noopener" class="chat-fab__item">
      <span class="chat-fab__item-icon wa-icon">
        <svg class="icon icon-md" stroke="#ffffff" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
        </svg>
      </span>
      WhatsApp
    </a>
  </div>
  <button class="chat-fab__btn" aria-label="Написать нам">
    <span style="font-size:20px">
      <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12" />
      </svg>
    </span>
  </button>
</div>

<!-- ── Callback FAB ───────────────────────── -->
<button class="callback-fab__btn" style="position:fixed;left:32px;bottom:32px;z-index:500;width:52px;height:52px;background:#10B981;border-radius:50%;border:none;color:#fff;font-size:20px;cursor:pointer;box-shadow:0 8px 24px rgba(16,185,129,.4);transition:all .2s" onclick="openModal('modal-callback')" aria-label="Обратный звонок">
  <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
  </svg>
</button>

<!-- ── Cookie Banner ──────────────────────── -->
<div class="cookie" id="cookieBanner">
  <p>Мы используем файлы cookie для улучшения работы сайта и анализа посещаемости. Продолжая использовать сайт, вы соглашаетесь с нашей <a href="/privacy.php">политикой конфиденциальности</a>.</p>
  <div class="cookie__actions">
    <button class="btn-cookie btn-cookie-accept">Принять</button>
    <button class="btn-cookie btn-cookie-decline">Отклонить</button>
  </div>
</div>

<!-- ── Modal: Demo request ────────────────── -->
<div class="modal-overlay" id="modal-demo">
  <div class="modal">
    <div class="modal__header">
      <div>
        <div class="modal__title">Получить демо CRM4Retail</div>
        <div class="modal__sub">Наш менеджер свяжется с вами в течение 30 минут</div>
      </div>
      <button class="modal__close" onclick="closeModal('modal-demo')">×</button>
    </div>
    <form id="form-demo">
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
          <label class="form-label">Количество точек <span class="req">*</span></label>
          <select name="points_count" class="form-control" required>
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
        <label class="form-label">Профиль розницы <span class="req">*</span></label>
        <select name="retail_profile" class="form-control" required>
          <option value="">Что продаёте?</option>
          <option value="products">Продукты питания</option>
          <option value="clothes">Одежда и обувь</option>
          <option value="pharma">Аптека / здоровье</option>
          <option value="electronics">Электроника</option>
          <option value="beauty">Красота / косметика</option>
          <option value="sport">Спортивные товары</option>
          <option value="other">Другое</option>
        </select>
      </div>
      <div class="form-success" id="demo-success"></div>
      <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:8px">
        Отправить заявку →
      </button>
      <p style="font-size:12px;color:var(--clr-text-muted);text-align:center;margin-top:12px">
        Нажимая кнопку, вы соглашаетесь с <a href="/privacy.php">политикой конфиденциальности</a>
      </p>
    </form>
  </div>
</div>

<!-- ── Modal: Callback ────────────────────── -->
<div class="modal-overlay" id="modal-callback">
  <div class="modal">
    <div class="modal__header">
      <div>
        <div class="modal__title">Обратный звонок</div>
        <div class="modal__sub">Перезвоним в течение 5 минут</div>
      </div>
      <button class="modal__close" onclick="closeModal('modal-callback')">×</button>
    </div>
    <form id="form-callback">
      <input type="hidden" name="csrf_token" value="<?= csrf_token() ?>">
      <div class="form-group">
        <label class="form-label">Ваше имя <span class="req">*</span></label>
        <input type="text" name="name" class="form-control" placeholder="Иван Иванов" required>
      </div>
      <div class="form-group">
        <label class="form-label">Телефон <span class="req">*</span></label>
        <input type="tel" name="phone" class="form-control" placeholder="+7 (999) 000-00-00" required>
      </div>
      <div class="form-success" id="callback-success"></div>
      <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:8px">
        Перезвоните мне <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
</svg>
      </button>
      <p style="font-size:12px;color:var(--clr-text-muted);text-align:center;margin-top:12px;line-height:1.5">
        Наш менеджер перезвонит вам в течение 5 минут<br>
        <span style="opacity:.7">(актуально только в рабочее время: пн–пт, 9:00–18:00)</span>
      </p>
    </form>
  </div>
</div>

<!-- ── Footer ─────────────────────────────── -->
<footer class="footer">
  <div class="container">
    <div class="footer__grid">
      <div class="footer__brand">
        <a href="/" class="nav__logo" style="margin-bottom:16px">
          <span class="nav__logo-text" style="color:#fff">CRM<span>4</span>Retail</span>
        </a>
        <p class="footer__tagline">
          Умная CRM-система для роста продаж в розничной торговле. Продукт компании <strong style="color:#fff">Хэдлайн</strong>, г. Ижевск.
        </p>
      </div>
      <div class="footer__col">
        <h4>Продукт</h4>
        <ul class="footer__links">
          <li><a href="/pricing.php">Цены</a></li>
          <li><a href="/cases.php">Кейсы</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>Компания</h4>
        <ul class="footer__links">
          <li><a href="/for-whom.php">Для кого</a></li>
          <li><a href="/privacy.php">Конфиденциальность</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>Контакты</h4>
        <div class="footer__contact">
          <p>📍 г. Ижевск, Россия</p>
          <p><a href="tel:88005113173">8-800-511-31-73</a></p>
          <p><a href="mailto:sale@hlcompany.ru">sale@hlcompany.ru</a></p>
          <div style="display:flex;gap:12px;margin-top:16px">
            <a href="https://t.me/vddheadline" target="_blank" style="font-size:20px" title="Telegram">
              <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
              </svg>
            </a>
            <a href="https://wa.me/79827971631" target="_blank" style="font-size:20px" title="WhatsApp">
              <svg class="icon icon-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <span>© <?= date('Y') ?> CRM4Retail. Продукт компании Хэдлайн. Все права защищены.</span>
      <div style="display:flex;gap:16px">
        <a href="/privacy.php">Политика конфиденциальности</a>
        <a href="/sitemap.xml">Sitemap</a>
      </div>
    </div>
  </div>
</footer>

<script src="/js/main.js"></script>
</body>
</html>

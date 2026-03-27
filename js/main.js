/* ============================================
   CRM4Retail — Main JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  // ── Navigation ──────────────────────────────
  const nav = document.querySelector('.nav');
  const burger = document.querySelector('.nav__burger');

  window.addEventListener('scroll', () => {
    nav?.classList.toggle('scrolled', window.scrollY > 20);
  });

  burger?.addEventListener('click', () => {
    nav?.classList.toggle('menu-open');
    const [s1, s2, s3] = burger.querySelectorAll('span');
    if (nav?.classList.contains('menu-open')) {
      s1.style.transform = 'rotate(45deg) translate(5px, 5px)';
      s2.style.opacity = '0';
      s3.style.transform = 'rotate(-45deg) translate(5px, -5px)';
    } else {
      s1.style.transform = '';
      s2.style.opacity = '';
      s3.style.transform = '';
    }
  });

  // Close menu on nav link click
  document.querySelectorAll('.nav__link').forEach(link => {
    link.addEventListener('click', () => {
      nav?.classList.remove('menu-open');
      burger?.querySelectorAll('span').forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
    });
  });

  // Active nav links
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav__link[href^="#"]');
  if (sections.length && navLinks.length) {
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          navLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + e.target.id));
        }
      });
    }, { rootMargin: '-50% 0px -50% 0px' });
    sections.forEach(s => io.observe(s));
  }

  // ── Fade-in animation ────────────────────────
  const fadeEls = document.querySelectorAll('.fade-up');
  if (fadeEls.length) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach((e, i) => {
        if (e.isIntersecting) {
          setTimeout(() => e.target.classList.add('visible'), i * 80);
          observer.unobserve(e.target);
        }
      });
    }, { rootMargin: '0px 0px -60px 0px' });
    fadeEls.forEach(el => observer.observe(el));
  }

  // ── Cookie Banner ────────────────────────────
  const cookie = document.querySelector('.cookie');
  if (cookie && !localStorage.getItem('cookie_accepted')) {
    setTimeout(() => cookie.classList.add('show'), 1500);
  }
  document.querySelector('.btn-cookie-accept')?.addEventListener('click', () => {
    localStorage.setItem('cookie_accepted', '1');
    cookie?.classList.remove('show');
  });
  document.querySelector('.btn-cookie-decline')?.addEventListener('click', () => {
    cookie?.classList.remove('show');
  });

  // ── Chat FAB ─────────────────────────────────
  const chatFab = document.querySelector('.chat-fab');
  const chatBtn = document.querySelector('.chat-fab__btn');
  chatBtn?.addEventListener('click', () => chatFab?.classList.toggle('open'));
  document.addEventListener('click', e => {
    if (!chatFab?.contains(e.target)) chatFab?.classList.remove('open');
  });

  // ── FAQ ──────────────────────────────────────
  document.querySelectorAll('.faq__item').forEach(item => {
    const q = item.querySelector('.faq__q');
    const a = item.querySelector('.faq__a');
    q?.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      // Close all
      document.querySelectorAll('.faq__item.open').forEach(i => {
        i.classList.remove('open');
        i.querySelector('.faq__a').style.maxHeight = null;
      });
      if (!isOpen) {
        item.classList.add('open');
        a.style.maxHeight = a.scrollHeight + 'px';
      }
    });
  });

  // ── Modals ───────────────────────────────────
  window.openModal = function(id) {
    document.getElementById(id)?.classList.add('open');
    document.body.style.overflow = 'hidden';
  };
  window.closeModal = function(id) {
    document.getElementById(id)?.classList.remove('open');
    document.body.style.overflow = '';
  };
  document.querySelectorAll('.modal-overlay').forEach(overlay => {
    overlay.addEventListener('click', e => {
      if (e.target === overlay) closeModal(overlay.id);
    });
  });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      document.querySelectorAll('.modal-overlay.open').forEach(m => closeModal(m.id));
    }
  });

  // ── Generic form submit ──────────────────────
  async function submitForm(form, action, successEl) {
    const data = new FormData(form);
    data.set('action', action);
    data.set('csrf_token', document.querySelector('[name="csrf_token"]')?.value || '');

    const btn = form.querySelector('[type="submit"]');
    const origText = btn.textContent;
    btn.disabled = true;
    btn.textContent = 'Отправляем…';

    try {
      const res = await fetch('php/form_handler.php', { method: 'POST', body: data });
      const json = await res.json();
      if (json.success) {
        form.style.display = 'none';
        if (successEl) { successEl.style.display = 'block'; successEl.textContent = json.message; }
        else showToast(json.message, 'success');
      } else {
        showToast(json.message || 'Ошибка. Попробуйте ещё раз.', 'error');
        btn.disabled = false;
        btn.textContent = origText;
      }
    } catch {
      showToast('Ошибка соединения. Попробуйте позже.', 'error');
      btn.disabled = false;
      btn.textContent = origText;
    }
  }

  // Demo form
  document.getElementById('form-demo')?.addEventListener('submit', function(e) {
    e.preventDefault();
    submitForm(this, 'demo', document.getElementById('demo-success'));
  });

  // Callback form
  document.getElementById('form-callback')?.addEventListener('submit', function(e) {
    e.preventDefault();
    submitForm(this, 'callback', document.getElementById('callback-success'));
  });

  // ── Toast ────────────────────────────────────
  window.showToast = function(msg, type = 'info') {
    const t = document.createElement('div');
    t.className = 'toast toast--' + type;
    t.textContent = msg;
    t.style.cssText = `
      position:fixed;top:90px;right:24px;z-index:9999;
      background:${type === 'success' ? '#10b981' : '#ef4444'};
      color:#fff;padding:14px 20px;border-radius:10px;
      font-weight:500;font-size:14px;max-width:340px;
      box-shadow:0 8px 24px rgba(0,0,0,.15);
      animation:slideInRight .3s ease;
    `;
    const style = document.createElement('style');
    style.textContent = '@keyframes slideInRight{from{transform:translateX(120%);opacity:0}to{transform:translateX(0);opacity:1}}';
    document.head.appendChild(style);
    document.body.appendChild(t);
    setTimeout(() => t.remove(), 4000);
  };

  // ── Callback FAB ─────────────────────────────
  document.querySelector('.callback-fab__btn')?.addEventListener('click', () => openModal('modal-callback'));

  // ── Phone mask ───────────────────────────────
  document.querySelectorAll('input[type="tel"]').forEach(input => {
    input.addEventListener('input', function() {
      let val = this.value.replace(/\D/g, '');
      if (val.startsWith('8')) val = '7' + val.slice(1);
      if (val.startsWith('7')) {
        val = '+7 (' + val.slice(1, 4) + ') ' + val.slice(4, 7) + '-' + val.slice(7, 9) + '-' + val.slice(9, 11);
      }
      this.value = val.trim().replace(/[\-\s\(\)]+$/, '');
    });
  });

});

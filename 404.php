<?php
http_response_code(404);
$pageTitle = '404 — Страница не найдена | CRM4Retail';
$pageDesc = 'Страница не найдена.';
require_once 'php/header.php';
?>

<div style="min-height:100vh;display:flex;align-items:center;justify-content:center;padding:120px 24px 80px;text-align:center">
  <div>
    <!-- Animated 404 graphic -->
    <div style="position:relative;margin:0 auto 40px;width:240px;height:160px">
      <div style="font-size:120px;font-weight:900;color:var(--clr-border2);letter-spacing:-.06em;font-family:var(--font-mono);line-height:1;user-select:none">404</div>
      <div style="position:absolute;bottom:-10px;left:50%;transform:translateX(-50%);width:160px;height:16px;background:radial-gradient(ellipse,rgba(0,0,0,.12) 0%,transparent 70%);border-radius:50%"></div>
      <div style="position:absolute;top:20px;right:10px;font-size:32px;animation:bounce 2s ease-in-out infinite">🛒</div>
    </div>

    <h1 style="font-size:clamp(24px,4vw,36px);font-weight:800;margin-bottom:16px;letter-spacing:-.03em">Страница не найдена</h1>
    <p style="color:var(--clr-text-2);font-size:17px;max-width:420px;margin:0 auto 40px;line-height:1.6">
      Похоже, эта страница переехала или её никогда не было. Но CRM4Retail никуда не делась — помогаем магазинам продавать больше.
    </p>

    <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
      <a href="/" class="btn btn-primary btn-lg">← На главную</a>
      <button class="btn btn-ghost btn-lg" onclick="openModal('modal-demo')">Получить демо CRM</button>
    </div>

  </div>
</div>

<style>
@keyframes bounce {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-12px) rotate(10deg); }
}
</style>

<?php require_once 'php/footer.php'; ?>

<?php
require_once __DIR__ . '/../php/config.php';
require_once __DIR__ . '/auth.php';
requireAuth();

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = sanitize($_POST['action'] ?? '');
    $table = sanitize($_POST['table'] ?? '');
    $id = (int)($_POST['id'] ?? 0);
    $validTables = ['demo_requests', 'price_requests', 'callback_requests'];

    if (in_array($table, $validTables) && $id > 0) {
        if ($action === 'update') {
            $status = sanitize($_POST['status'] ?? '');
            $notes = sanitize($_POST['notes'] ?? '');
            updateRequest($table, $id, $status, $notes);
        } elseif ($action === 'delete') {
            deleteRequest($table, $id);
        }
    }
    header('Location: ' . $_SERVER['PHP_SELF'] . '?tab=' . ($_GET['tab'] ?? 'demo'));
    exit;
}

$tab = sanitize($_GET['tab'] ?? 'demo');
$page = max(1, (int)($_GET['p'] ?? 1));
$status = sanitize($_GET['status'] ?? '');
$search = sanitize($_GET['q'] ?? '');
$perPage = 15;

$tableMap = ['demo' => 'demo_requests', 'price' => 'price_requests', 'callback' => 'callback_requests'];
$currentTable = $tableMap[$tab] ?? 'demo_requests';

$rows = getRequests($currentTable, $status, $search, $page, $perPage);
$total = getTotalCount($currentTable, $status, $search);
$totalPages = ceil($total / $perPage);

$newDemo = countNew('demo_requests');
$newPrice = countNew('price_requests');
$newCallback = countNew('callback_requests');

$statusLabels = ['new'=>'Новая','in_progress'=>'В работе','done'=>'Завершена','cancelled'=>'Отменена'];
$statusClasses = ['new'=>'badge-new','in_progress'=>'badge-progress','done'=>'badge-done','cancelled'=>'badge-cancelled','called'=>'badge-done','missed'=>'badge-cancelled'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Панель управления — CRM4Retail</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="/admin/admin.css">
</head>
<body>

<div class="admin-wrap">

  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar__logo">
      <div class="sidebar__logo-icon">C4</div>
      <div>
        <div class="sidebar__logo-text">CRM4Retail</div>
        <div class="sidebar__logo-sub">Admin Panel</div>
      </div>
    </div>

    <nav class="sidebar__nav">
      <div class="sidebar__label">Заявки</div>
      <a href="?tab=demo" class="sidebar__link <?= $tab === 'demo' ? 'active' : '' ?>">
        <span class="sidebar__link-icon">📋</span>
        Заявки на демо
        <?php if ($newDemo > 0): ?><span class="sidebar__badge"><?= $newDemo ?></span><?php endif; ?>
      </a>
      <a href="?tab=price" class="sidebar__link <?= $tab === 'price' ? 'active' : '' ?>">
        <span class="sidebar__link-icon">💰</span>
        Расчёт стоимости
        <?php if ($newPrice > 0): ?><span class="sidebar__badge"><?= $newPrice ?></span><?php endif; ?>
      </a>
      <a href="?tab=callback" class="sidebar__link <?= $tab === 'callback' ? 'active' : '' ?>">
        <span class="sidebar__link-icon">📞</span>
        Обратные звонки
        <?php if ($newCallback > 0): ?><span class="sidebar__badge"><?= $newCallback ?></span><?php endif; ?>
      </a>

      <div class="sidebar__label" style="margin-top:24px">Сайт</div>
      <a href="/" target="_blank" class="sidebar__link">
        <span class="sidebar__link-icon">🌐</span>
        Открыть сайт
      </a>
    </nav>

    <div class="sidebar__footer">
      <div class="sidebar__user">
        <div class="sidebar__user-avatar"><?= strtoupper(substr($_SESSION['admin_user'] ?? 'A', 0, 1)) ?></div>
        <div>
          <div class="sidebar__user-name"><?= htmlspecialchars($_SESSION['admin_user'] ?? 'Admin') ?></div>
          <div class="sidebar__user-role">Администратор</div>
        </div>
      </div>
      <a href="?logout=1" class="sidebar__logout" onclick="return confirm('Выйти из панели?')">
        <span>🚪</span> Выйти
      </a>
    </div>
  </aside>

  <!-- Main -->
  <main class="admin-main">
    <div class="admin-topbar">
      <div style="display:flex;align-items:center;gap:12px">
        <button class="btn btn-ghost btn-sm" id="sidebarToggle" style="display:none">☰</button>
        <h2 class="admin-topbar__title">
          <?= $tab === 'demo' ? 'Заявки на демо' : ($tab === 'price' ? 'Заявки на расчёт' : 'Обратные звонки') ?>
        </h2>
      </div>
    </div>

    <div class="admin-content">

      <!-- Stats -->
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-card__val"><?= $newDemo + $newPrice + $newCallback ?></div>
          <div class="stat-card__label">Новых заявок</div>
          <div class="stat-card__change change-up">Сегодня</div>
        </div>
        <div class="stat-card">
          <div class="stat-card__val"><?= $newDemo ?></div>
          <div class="stat-card__label">На демо (новые)</div>
        </div>
        <div class="stat-card">
          <div class="stat-card__val"><?= $newPrice ?></div>
          <div class="stat-card__label">Расчёт стоимости</div>
        </div>
        <div class="stat-card">
          <div class="stat-card__val"><?= $newCallback ?></div>
          <div class="stat-card__label">Звонков ожидают</div>
        </div>
      </div>

      <!-- Table Card -->
      <div class="card">
        <div class="card-header">
          <div style="display:flex;align-items:center;gap:16px;flex-wrap:wrap">
            <h3>
              <?= $tab === 'demo' ? '📋 Заявки на демо' : ($tab === 'price' ? '💰 Расчёт стоимости' : '📞 Обратные звонки') ?>
              <span style="font-weight:400;font-size:13px;color:var(--muted);margin-left:6px">(<?= $total ?>)</span>
            </h3>
          </div>
          <div class="search-bar">
            <form method="GET" style="display:flex;gap:8px;align-items:center;flex-wrap:wrap;width:100%">
              <input type="hidden" name="tab" value="<?= htmlspecialchars($tab) ?>">
              <div class="search-wrap" style="flex:1;min-width:160px">
                <input type="text" name="q" class="search-input" placeholder="Поиск" value="<?= htmlspecialchars($search) ?>" style="width:100%">
              </div>
              <select name="status" class="form-control" style="width:auto;min-width:130px;padding:8px 12px">
                <option value="">Все статусы</option>
                <?php foreach ($statusLabels as $val => $lbl): ?>
                  <?php if ($tab === 'callback' && in_array($val, ['new','called','missed'])): ?>
                    <option value="<?= $val ?>" <?= $status === $val ? 'selected' : '' ?>><?= $lbl ?></option>
                  <?php elseif ($tab !== 'callback' && in_array($val, ['new','in_progress','done','cancelled'])): ?>
                  <option value="<?= $val ?>" <?= $status === $val ? 'selected' : '' ?>><?= $lbl ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
              <button type="submit" class="btn btn-primary btn-sm">Найти</button>
              <?php if ($search || $status): ?>
              <a href="?tab=<?= $tab ?>" class="btn btn-ghost btn-sm">Сбросить</a>
              <?php endif; ?>
            </form>
          </div>
        </div>

        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th style="width:40px">#</th>
                <th>Имя</th>
                <th>Телефон</th>
                <?php if ($tab !== 'callback'): ?>
                <th>Город</th>
                <?php endif; ?>
                <?php if ($tab !== 'callback'): ?>
                <th>Точки</th>
                <th>Профиль</th>
                <?php endif; ?>
                <?php if ($tab === 'price'): ?>
                <th>CRM</th>
                <th>Бюджет</th>
                <?php endif; ?>
                <th>Статус</th>
                <th>Дата</th>
                <th style="width:120px">Действия</th>
              </tr>
            </thead>
            <tbody>
              <?php if (empty($rows)): ?>
              <tr><td colspan="12" style="text-align:center;padding:40px;color:var(--muted)">Заявок не найдено</td></tr>
              <?php else: ?>
              <?php foreach ($rows as $row): ?>
              <tr>
                <td style="font-family:'JetBrains Mono',monospace;color:var(--muted)"><?= $row['id'] ?></td>
                <td style="font-weight:600"><?= htmlspecialchars($row['name']) ?></td>
                <td style="font-family:'JetBrains Mono',monospace;font-size:12px">
                  <a href="tel:<?= htmlspecialchars($row['phone']) ?>" style="color:var(--text2)"><?= htmlspecialchars($row['phone']) ?></a>
                </td>
                <?php if ($tab !== 'callback'): ?>
                <td><?= htmlspecialchars($row['city'] ?? '—') ?></td>
                <?php endif; ?>
                <?php if ($tab !== 'callback'): ?>
                <td><?= htmlspecialchars($row['points_count'] ?? '—') ?></td>
                <td><?= htmlspecialchars($row['retail_profile'] ?? '—') ?></td>
                <?php endif; ?>
                <?php if ($tab === 'price'): ?>
                <td><?= htmlspecialchars($row['has_crm'] ?? '—') ?></td>
                <td style="font-size:12px"><?= htmlspecialchars($row['budget'] ?? '—') ?></td>
                <?php endif; ?>
                <td>
                  <span class="badge <?= $statusClasses[$row['status']] ?? 'badge-new' ?>">
                    <?= $statusLabels[$row['status']] ?? $row['status'] ?>
                  </span>
                </td>
                <td style="font-size:12px;color:var(--muted);font-family:'JetBrains Mono',monospace;white-space:nowrap">
                  <?= date('d.m.Y<br>H:i', strtotime($row['created_at'])) ?>
                </td>
                <td>
                  <div style="display:flex;gap:6px">
                    <button class="btn btn-ghost btn-sm" onclick="openEdit(<?= htmlspecialchars(json_encode($row)) ?>, '<?= $currentTable ?>')" title="Редактировать">✏️</button>
                    <button class="btn btn-sm" style="background:rgba(239,68,68,.1);color:#991b1b;border:none" onclick="confirmDelete(<?= $row['id'] ?>, '<?= $currentTable ?>')" title="Удалить">🗑</button>
                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <?php if ($totalPages > 1): ?>
        <div style="padding:16px 20px;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between">
          <span style="font-size:13px;color:var(--muted)">Показано <?= count($rows) ?> из <?= $total ?></span>
          <div class="pagination">
            <?php if ($page > 1): ?>
            <a href="?tab=<?= $tab ?>&p=<?= $page-1 ?>&q=<?= urlencode($search) ?>&status=<?= urlencode($status) ?>" class="page-btn">‹</a>
            <?php endif; ?>
            <?php for ($i = max(1, $page-2); $i <= min($totalPages, $page+2); $i++): ?>
            <a href="?tab=<?= $tab ?>&p=<?= $i ?>&q=<?= urlencode($search) ?>&status=<?= urlencode($status) ?>" class="page-btn <?= $i === $page ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>
            <?php if ($page < $totalPages): ?>
            <a href="?tab=<?= $tab ?>&p=<?= $page+1 ?>&q=<?= urlencode($search) ?>&status=<?= urlencode($status) ?>" class="page-btn">›</a>
            <?php endif; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </main>
</div>

<!-- Edit Modal -->
<div class="modal-overlay" id="edit-modal">
  <div class="modal">
    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:20px">
      <h3 style="font-size:18px;font-weight:700">Редактировать заявку</h3>
      <button onclick="document.getElementById('edit-modal').classList.remove('open')" style="background:var(--surface2);border:none;width:28px;height:28px;border-radius:50%;font-size:16px;cursor:pointer">×</button>
    </div>
    <form method="POST" id="edit-form">
      <input type="hidden" name="action" value="update">
      <input type="hidden" name="table" id="edit-table">
      <input type="hidden" name="id" id="edit-id">
      <div id="edit-info" style="background:var(--surface2);border-radius:8px;padding:14px;margin-bottom:16px;font-size:13px;line-height:1.8"></div>
      <div class="form-group">
        <label class="form-label">Статус</label>
        <select name="status" id="edit-status" class="form-control">
          <option value="new">Новая</option>
          <option value="in_progress">В работе</option>
          <option value="done">Завершена</option>
          <option value="cancelled">Отменена</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label">Заметки менеджера</label>
        <textarea name="notes" id="edit-notes" class="form-control" rows="3" placeholder="Комментарий к заявке…" style="resize:vertical"></textarea>
      </div>
      <div style="display:flex;gap:10px;justify-content:flex-end">
        <button type="button" onclick="document.getElementById('edit-modal').classList.remove('open')" class="btn btn-ghost">Отмена</button>
        <button type="submit" class="btn btn-primary">Сохранить</button>
      </div>
    </form>
  </div>
</div>

<!-- Delete form -->
<form method="POST" id="delete-form" style="display:none">
  <input type="hidden" name="action" value="delete">
  <input type="hidden" name="table" id="delete-table">
  <input type="hidden" name="id" id="delete-id">
</form>

<script>
// Handle logout
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get('logout') === '1') {
  if (!confirm('Выйти из панели администратора?')) {
    history.replaceState({}, '', window.location.pathname + '?tab=<?= $tab ?>');
  } else {
    window.location.href = '?do_logout=1';
  }
}

function openEdit(row, table) {
  document.getElementById('edit-table').value = table;
  document.getElementById('edit-id').value = row.id;
  document.getElementById('edit-status').value = row.status || 'new';
  document.getElementById('edit-notes').value = row.notes || '';

  let info = `<strong>${row.name}</strong><br>
    📞 ${row.phone}`;
  
  // Показываем город только если это не обратные звонки
  if (table !== 'callback_requests' && row.city) {
    info += `<br>📍 ${row.city}`;
  }
  
  if (row.points_count) info += `<br>🏪 Точек: ${row.points_count}`;
  if (row.retail_profile) info += `<br>📦 Профиль: ${row.retail_profile}`;
  if (row.has_crm) info += `<br>💻 CRM: ${row.has_crm}`;
  if (row.budget) info += `<br>💰 Бюджет: ${row.budget}`;
  
  document.getElementById('edit-info').innerHTML = info;
  document.getElementById('edit-modal').classList.add('open');
}

function confirmDelete(id, table) {
  if (!confirm('Удалить заявку #' + id + '? Это действие нельзя отменить.')) return;
  document.getElementById('delete-id').value = id;
  document.getElementById('delete-table').value = table;
  document.getElementById('delete-form').submit();
}

// Close modal on overlay click
document.getElementById('edit-modal').addEventListener('click', function(e) {
  if (e.target === this) this.classList.remove('open');
});

// Mobile sidebar
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebar = document.getElementById('sidebar');
sidebarToggle?.addEventListener('click', () => sidebar.classList.toggle('open'));

// Show toggle on mobile
if (window.innerWidth <= 768) sidebarToggle.style.display = 'flex';
window.addEventListener('resize', () => {
  sidebarToggle.style.display = window.innerWidth <= 768 ? 'flex' : 'none';
});
</script>

<?php
// Handle actual logout
if (isset($_GET['do_logout'])) logout();
?>
</body>
</html>
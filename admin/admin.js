/* CRM4Retail Admin JS */

document.addEventListener('DOMContentLoaded', () => {
  // Auto-dismiss flash messages
  document.querySelectorAll('.flash').forEach(el => {
    setTimeout(() => el.style.opacity = '0', 4000);
    setTimeout(() => el.remove(), 4500);
  });

  // Confirm dangerous actions
  document.querySelectorAll('[data-confirm]').forEach(btn => {
    btn.addEventListener('click', e => {
      if (!confirm(btn.dataset.confirm)) e.preventDefault();
    });
  });

  // Table row highlight on hover (already in CSS, JS for touch)
  document.querySelectorAll('tbody tr').forEach(tr => {
    tr.addEventListener('click', e => {
      if (!e.target.closest('button') && !e.target.closest('a')) {
        tr.classList.toggle('selected');
      }
    });
  });

  // Status color preview in select
  const statusSelect = document.getElementById('edit-status');
  statusSelect?.addEventListener('change', function() {
    const colors = {
      new: '#2563EB',
      in_progress: '#F59E0B',
      done: '#10B981',
      cancelled: '#EF4444',
      called: '#10B981',
      missed: '#EF4444'
    };
    this.style.borderColor = colors[this.value] || '#E2E8F4';
    this.style.color = colors[this.value] || '#334155';
  });

  // Export table to CSV
  window.exportCSV = function() {
    const table = document.querySelector('table');
    if (!table) return;
    const rows = [...table.querySelectorAll('tr')];
    const csv = rows.map(r =>
      [...r.querySelectorAll('th,td')]
        .map(c => '"' + c.innerText.replace(/"/g, '""').replace(/\n/g, ' ') + '"')
        .join(',')
    ).join('\n');
    const blob = new Blob(['\uFEFF' + csv], { type: 'text/csv;charset=utf-8;' });
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'crm4retail_export_' + new Date().toISOString().slice(0,10) + '.csv';
    a.click();
  };
});

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contactForm');
  if (!form) return;
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const data = new FormData(this);
    const btn = this.querySelector('button[type="submit"]');
    const orig = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Sending...';

    fetch('contact.php', { method: 'POST', body: data })
      .then(r => r.json())
      .then(d => {
        const alert = document.getElementById('formAlert');
        if (d.success) {
          alert.innerHTML = `<div class="alert alert-success">${d.message}</div>`;
          form.reset();
        } else {
          alert.innerHTML = `<div class="alert alert-danger">${d.message}</div>`;
        }
        btn.disabled = false;
        btn.innerHTML = orig;
      })
      .catch(() => {
        document.getElementById('formAlert').innerHTML = '<div class="alert alert-danger">Something went wrong.</div>';
        btn.disabled = false;
        btn.innerHTML = orig;
      });
  });
});
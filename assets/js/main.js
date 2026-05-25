// Scroll-triggered fade-up
const observer = new IntersectionObserver((entries) => {
  entries.forEach(el => {
    if (el.isIntersecting) {
      el.target.classList.add('visible');
      observer.unobserve(el.target);
    }
  });
}, { threshold: 0.12 });

document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

  // Active nav link
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (!href || href.startsWith('#')) return;

    const linkPage = new URL(href, window.location.href).pathname.split('/').pop() || 'index.php';
    if (linkPage === currentPage) {
      link.classList.add('active');
    }
  });

  // Smooth scroll (if needed)
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (!href || href === '#') return;

      e.preventDefault();
      const target = document.querySelector(href);
      if (target) target.scrollIntoView({ behavior: 'smooth' });
    });
  });
});

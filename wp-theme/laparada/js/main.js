(() => {
  const WA = document.body.dataset.wa || '';
  document.querySelectorAll('a.wa').forEach(a => {
    const msg = a.dataset.msg || '';
    a.href = `https://wa.me/${WA}${msg ? '?text=' + encodeURIComponent(msg) : ''}`;
    a.target = '_blank';
    a.rel = 'noopener';
  });

  const header = document.querySelector('.header');
  if (!header) return;
  const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 24);
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  const btn = document.querySelector('.menu-btn');
  const nav = document.getElementById('nav');
  if (!btn || !nav) return;
  const setMenu = open => {
    nav.classList.toggle('open', open);
    btn.setAttribute('aria-expanded', String(open));
    btn.setAttribute('aria-label', open ? 'Cerrar menú' : 'Abrir menú');
  };
  btn.addEventListener('click', () => setMenu(!nav.classList.contains('open')));
  nav.addEventListener('click', e => { if (e.target.closest('a')) setMenu(false); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape' && nav.classList.contains('open')) { setMenu(false); btn.focus(); } });

  // Hide floating WhatsApp button while the final CTA is on screen (avoids duplicate CTA)
  const float = document.querySelector('.wa-float');
  const final = document.querySelector('.final');
  if (float && final && 'IntersectionObserver' in window) {
    new IntersectionObserver(([e]) => float.classList.toggle('hide', e.isIntersecting), { threshold: .35 }).observe(final);
  }

})();

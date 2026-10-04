/* Visor de la galería: clic en una imagen para verla grande. Esc, flechas, clic fuera y deslizar en móvil. */
(() => {
  const links = [...document.querySelectorAll('.gallery a.lb-item')];
  if (!links.length || typeof HTMLDialogElement === 'undefined') return;

  const t = window.laParadaLb || {};
  let dlg, img, count, prevBtn, nextBtn, caption;
  let index = 0;
  let opener = null;

  const make = (tag, cls, attrs = {}) => {
    const el = document.createElement(tag);
    if (cls) el.className = cls;
    for (const k in attrs) el.setAttribute(k, attrs[k]);
    return el;
  };

  function build() {
    dlg = make('dialog', 'lb', { 'aria-label': t.label || 'Galería' });
    img = make('img', 'lb-img', { alt: '' });
    caption = make('p', 'lb-cap');
    count = make('span', 'lb-count', { 'aria-live': 'polite' });
    const close = make('button', 'lb-btn lb-close', { type: 'button', 'aria-label': t.close || 'Cerrar' });
    prevBtn = make('button', 'lb-btn lb-prev', { type: 'button', 'aria-label': t.prev || 'Anterior' });
    nextBtn = make('button', 'lb-btn lb-next', { type: 'button', 'aria-label': t.next || 'Siguiente' });
    close.innerHTML = '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" d="M6 6l12 12M18 6 6 18"/></svg>';
    prevBtn.innerHTML = '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" d="M15 5l-7 7 7 7"/></svg>';
    nextBtn.innerHTML = '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>';
    const stage = make('div', 'lb-stage');
    stage.append(img);
    dlg.append(stage, caption, count, close, prevBtn, nextBtn);
    document.body.append(dlg);

    close.addEventListener('click', () => dlg.close());
    prevBtn.addEventListener('click', () => go(-1));
    nextBtn.addEventListener('click', () => go(1));
    // Clic en el fondo (no en la imagen ni en los botones) cierra.
    dlg.addEventListener('click', e => { if (e.target === dlg || e.target === stage) dlg.close(); });
    dlg.addEventListener('close', () => {
      document.documentElement.classList.remove('lb-open');
      if (opener) opener.focus({ preventScroll: true });
    });
    dlg.addEventListener('keydown', e => {
      if (e.key === 'ArrowLeft') { e.preventDefault(); go(-1); }
      if (e.key === 'ArrowRight') { e.preventDefault(); go(1); }
    });

    // Deslizar con el dedo
    let x0 = null;
    stage.addEventListener('touchstart', e => { x0 = e.touches[0].clientX; }, { passive: true });
    stage.addEventListener('touchend', e => {
      if (x0 === null) return;
      const dx = e.changedTouches[0].clientX - x0;
      x0 = null;
      if (Math.abs(dx) > 50) go(dx < 0 ? 1 : -1);
    }, { passive: true });
  }

  function show(i) {
    index = (i + links.length) % links.length;
    const a = links[index];
    const thumb = a.querySelector('img');
    img.classList.add('loading');
    img.onload = () => img.classList.remove('loading');
    img.src = a.href;
    img.alt = thumb ? thumb.alt : '';
    caption.textContent = img.alt;
    count.textContent = `${index + 1} / ${links.length}`;
    const single = links.length < 2;
    prevBtn.hidden = nextBtn.hidden = single;
    // Precarga de las vecinas
    [index + 1, index - 1].forEach(n => { if (!single) new Image().src = links[(n + links.length) % links.length].href; });
  }

  function go(step) { show(index + step); }

  links.forEach((a, i) => a.addEventListener('click', e => {
    if (e.metaKey || e.ctrlKey || e.shiftKey || e.button === 1) return; // abrir en pestaña nueva
    e.preventDefault();
    if (!dlg) build();
    opener = a;
    show(i);
    document.documentElement.classList.add('lb-open');
    dlg.showModal();
  }));
})();

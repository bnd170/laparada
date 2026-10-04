// "Uyyy" de estadio: suena una sola vez por navegador.
// Los navegadores solo permiten audio tras una interacción (clic, toque o tecla);
// se intenta con el primer movimiento del ratón y, si se bloquea, con la primera interacción.
// Audio: "Millerntor Stadium Crowd Reaction Chance Missed 01" de itmightgetloud (Freesound, CC0).
(() => {
  const KEY = 'laparada-uyyy-sonado';
  try { if (localStorage.getItem(KEY)) return; } catch (e) { /* sin almacenamiento: se intenta igual */ }

  const audio = new Audio('assets/uyyy.mp3');
  audio.preload = 'auto';
  audio.volume = 0.6;

  const interactions = ['pointerdown', 'keydown', 'touchend'];
  let pending = false;
  let done = false;

  const finish = () => {
    done = true;
    interactions.forEach(type => removeEventListener(type, tryPlay, true));
    removeEventListener('mousemove', tryPlay, true);
    try { localStorage.setItem(KEY, '1'); } catch (e) {}
  };

  function tryPlay() {
    if (done || pending) return;
    pending = true;
    audio.play().then(finish).catch(() => { pending = false; });
  }

  addEventListener('mousemove', tryPlay, { capture: true, passive: true, once: true });
  interactions.forEach(type => addEventListener(type, tryPlay, { capture: true, passive: true }));
})();

// "Uyyy" de estadio al entrar en la web.
// Los navegadores solo permiten audio tras una interacción (clic, toque o tecla);
// se intenta con el primer movimiento del ratón y, si se bloquea, con la primera interacción.
// Audio: "Millerntor Stadium Crowd Reaction Chance Missed 01" de itmightgetloud (Freesound, CC0).
(() => {
  // Mientras validamos el sonido, suena en cada carga. Poner a true para que suene una sola vez.
  const SOLO_UNA_VEZ = false;
  const KEY = 'laparada-uyyy-sonado';
  if (SOLO_UNA_VEZ) {
    try { if (localStorage.getItem(KEY)) return; } catch (e) { /* sin almacenamiento: se intenta igual */ }
  }

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
    if (SOLO_UNA_VEZ) { try { localStorage.setItem(KEY, '1'); } catch (e) {} }
  };

  function tryPlay() {
    if (done || pending) return;
    pending = true;
    audio.play().then(finish).catch(() => { pending = false; });
  }

  addEventListener('mousemove', tryPlay, { capture: true, passive: true, once: true });
  interactions.forEach(type => addEventListener(type, tryPlay, { capture: true, passive: true }));
})();

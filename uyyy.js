// "Uyyy" de estadio al entrar en la web.
// Se intenta reproducir a los RETARDO_MS de cargar. Los navegadores solo permiten audio tras una
// interacción (clic, toque o tecla), así que si lo bloquean suena con la primera interacción.
// Audio: "Millerntor Stadium Crowd Reaction Chance Missed 01" de itmightgetloud (Freesound, CC0).
(() => {
  // Mientras validamos el sonido, suena en cada carga. Poner a true para que suene una sola vez.
  const SOLO_UNA_VEZ = false;
  const RETARDO_MS = 1500;
  const KEY = 'laparada-uyyy-sonado';
  if (SOLO_UNA_VEZ) {
    try { if (localStorage.getItem(KEY)) return; } catch (e) { /* sin almacenamiento: se intenta igual */ }
  }

  const audio = new Audio('assets/uyyy.mp3');
  audio.preload = 'auto';
  audio.volume = 0.6;

  // Varios tipos porque cada navegador acepta eventos distintos como "interacción" (Safari, sobre todo).
  const gestures = ['pointerdown', 'mousedown', 'click', 'keydown', 'touchend'];
  let done = false;
  let timer;

  const finish = () => {
    if (done) return;
    done = true;
    clearTimeout(timer);
    gestures.forEach(type => removeEventListener(type, onGesture, true));
    if (SOLO_UNA_VEZ) { try { localStorage.setItem(KEY, '1'); } catch (e) {} }
  };

  const play = source => audio.play().then(finish).catch(err => {
    if (!done) console.info(`[uyyy] El navegador ha bloqueado el sonido (${source}: ${err.name}). Sonará al hacer clic, tocar o pulsar una tecla.`);
  });

  // En un clic, toque o tecla se llama a play() directamente dentro del evento, como exige Safari.
  function onGesture(e) { if (!done) play(e.type); }

  gestures.forEach(type => addEventListener(type, onGesture, { capture: true, passive: true }));
  timer = setTimeout(() => { if (!done) play('temporizador'); }, RETARDO_MS);
})();

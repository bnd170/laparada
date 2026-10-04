# La Parada · Escuela de porteros

Propuesta de rediseño de [laparadaonline.com](https://laparadaonline.com), centrada en el proceso de tecnificación del portero moderno.

- `index.html`: home (portero moderno, método técnica/táctica/mental, proceso, campus, contacto).
- `planes.html`: planes de la escuela (Base 40 €/mes, Tecnificación 60 €/mes).
- `styles.css`: estilos compartidos.
- `assets/`: imágenes optimizadas en WebP.
- `loader.css` + `loader.js`: pantalla de carga con el logo (1,5 s, solo si el navegador lo admite y sin «reducir movimiento»).
- `lightbox.js`: visor de la galería (clic en una imagen para verla grande).
- `wp-theme/`: la misma web convertida en tema de WordPress 7.1.2 (ver `wp-theme/README.md`). Los cambios de diseño se mantienen en ambas versiones.

Todas las llamadas a la acción abren una conversación de WhatsApp con un mensaje ya escrito.

## Ver en local

```bash
python3 -m http.server 8765
```

Y abre http://localhost:8765.

## Sonido

Al entrar suena un "uyyy" de estadio de unos 3 segundos (`uyyy.js` + `assets/uyyy.mp3`). De momento suena en cada carga; para que suene una sola vez por navegador, pon `SOLO_UNA_VEZ = true` en `uyyy.js`. Se intenta reproducir a los 1,5 s de cargar (`RETARDO_MS`); como los navegadores solo permiten audio tras una interacción, si lo bloquean suena con el primer clic, toque o tecla.

Audio: [Millerntor Stadium Crowd Reaction Chance Missed 01](https://freesound.org/people/itmightgetloud/sounds/829452/) de itmightgetloud en Freesound, licencia CC0. Recorte de 45,35 s a 48,30 s.

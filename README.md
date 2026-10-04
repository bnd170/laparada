# La Parada · Escuela de porteros

Propuesta de rediseño de [laparadaonline.com](https://laparadaonline.com), centrada en el proceso de tecnificación del portero moderno.

- `index.html`: home (portero moderno, método técnica/táctica/mental, proceso, campus, contacto).
- `planes.html`: planes de la escuela (Base 40 €/mes, Tecnificación 60 €/mes).
- `styles.css`: estilos compartidos.
- `assets/`: imágenes optimizadas en WebP.

Todas las llamadas a la acción abren una conversación de WhatsApp con un mensaje ya escrito.

## Ver en local

```bash
python3 -m http.server 8765
```

Y abre http://localhost:8765.

## Sonido

Al entrar suena una vez (por navegador) un "uyyy" de estadio de unos 3 segundos (`uyyy.js` + `assets/uyyy.mp3`). Los navegadores solo permiten audio tras una interacción, así que se intenta con el primer movimiento del ratón y, si se bloquea, con el primer clic, toque o tecla.

Audio: [Millerntor Stadium Crowd Reaction Chance Missed 01](https://freesound.org/people/itmightgetloud/sounds/829452/) de itmightgetloud en Freesound, licencia CC0. Recorte de 45,35 s a 48,30 s.

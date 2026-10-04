# Tema WordPress "La Parada"

Conversión del diseño estático (`index.html`, `planes.html`) a un tema clásico de WordPress.

- **Versión objetivo:** WordPress 7.1.2 (la que corre laparadaonline.com; comprobado comparando los archivos de `wp-includes` con la release oficial). Probado en WP 7.1.2 + PHP 8.3.
- **Instalación:** `laparada.zip` → Apariencia › Temas › Añadir nuevo › Subir tema › Activar. O copia la carpeta `laparada/` a `wp-content/themes/`.

## Configuración tras activar

1. Crea una página **Inicio** y en Ajustes › Lectura ponla como página de inicio. Se usa `front-page.php`.
2. Crea una página con slug **planes** (usa `page-planes.php` automáticamente).
3. Ajustes › Enlaces permanentes: «Nombre de la entrada».
4. Opcional: Apariencia › Menús › asigna un menú a «Menú principal». Sin menú se muestra el del diseño.
5. Personalizar › La Parada: WhatsApp, email y activar/desactivar el «uyyy» de estadio.
6. Menú lateral **La Parada** › pulsa **Importar imágenes del diseño** (una vez). Pasa las imágenes del tema a la biblioteca de medios y desde ahí se pueden cambiar.

## Estructura

| Archivo | Qué es |
|---|---|
| `style.css` | Cabecera del tema + CSS del diseño |
| `css/planes.css` | Estilos solo de la página Planes |
| `header.php` / `footer.php` | Barra superior, sprite de iconos, footer y botón flotante de WhatsApp |
| `front-page.php` | Portada |
| `page-planes.php` | Planes |
| `page.php`, `single.php`, `index.php`, `404.php`, `searchform.php` | Plantillas genéricas con el mismo estilo |
| `woocommerce.php` | Envoltorio para la tienda (el sitio actual usa WooCommerce) |
| `inc/` | Personalizador, menú e imágenes (`images.php` front, `admin-images.php` panel, `defaults.php` huecos y valores por defecto) |
| `js/main.js`, `js/uyyy.js` | Menú móvil, enlaces de WhatsApp, sonido |

## Imágenes configurables

Solo las imágenes se editan desde el administrador (menú **La Parada**); los textos se cambian en las plantillas. Motivos: rendimiento y no llenar la base de datos.

- Una sola opción (`lp_images`, autoload) con IDs de la biblioteca de medios: una consulta, sin postmeta extra por imagen.
- 13 huecos sueltos (hero, pilares, campus, fondo final, logo...) + 2 listas ordenables: **galería** y **guantes**.
- Las imágenes salen con `srcset`, tamaños de WordPress y el `alt` de la biblioteca.
- Sin configurar nada, se usan los archivos de `assets/`.
- Para añadir un hueco nuevo: añádelo en `inc/defaults.php` y usa `lp_image( 'clave' )` en la plantilla.

## Galería

Las imágenes de la galería abren un visor a pantalla completa (`js/lightbox.js`, solo se carga donde hay galería): flechas, Esc, clic fuera y deslizar en móvil. Sin JavaScript, cada imagen enlaza a su versión grande.

El contenido de portada y planes está escrito en las plantillas (igual que en el HTML original). Los textos se editan en `front-page.php` y `page-planes.php`.

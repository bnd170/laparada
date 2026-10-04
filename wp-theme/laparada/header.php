<?php
/**
 * Cabecera: <head>, sprite SVG de iconos, barra superior y apertura de <main>.
 *
 * @package laparada
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="theme-color" content="#0A0C09">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-wa="<?php echo esc_attr( lp_wa_number() ); ?>">
<?php wp_body_open(); ?>
<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
  <symbol id="i-wa" viewBox="0 0 24 24"><path fill="currentColor" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></symbol>
  <symbol id="i-check" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" d="M20 6 9 17l-5-5"/></symbol>
  <symbol id="i-arrow" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></symbol>
</svg>

<a class="skip" href="#main"><?php esc_html_e( 'Saltar al contenido', 'laparada' ); ?></a>

<header class="header" id="top">
  <div class="container">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
      <?php lp_image( 'logo', array() ); ?>
      <span>La Parada<small>Escuela de porteros</small></span>
    </a>
    <nav class="nav" id="nav" aria-label="<?php esc_attr_e( 'Principal', 'laparada' ); ?>">
      <?php lp_primary_nav(); ?>
      <a class="nav-wa wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, me gustaría recibir información sobre la escuela de porteros La Parada."><svg aria-hidden="true"><use href="#i-wa"/></svg><?php esc_html_e( 'Escríbenos por WhatsApp', 'laparada' ); ?></a>
    </nav>
    <div style="display:flex;gap:10px;align-items:center">
      <a class="btn btn-wa wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, me gustaría recibir información sobre la escuela de porteros La Parada.">
        <svg aria-hidden="true"><use href="#i-wa"/></svg><span><?php esc_html_e( 'Hablemos', 'laparada' ); ?><span class="lbl-long"> <?php esc_html_e( 'por WhatsApp', 'laparada' ); ?></span></span>
      </a>
      <button class="menu-btn" aria-expanded="false" aria-controls="nav" aria-label="<?php esc_attr_e( 'Abrir menú', 'laparada' ); ?>">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/></svg>
      </button>
    </div>
  </div>
</header>

<main id="main">

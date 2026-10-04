<?php
/**
 * Pie: cierre de <main>, footer, botón flotante de WhatsApp y scripts.
 *
 * @package laparada
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</main>

<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:var(--on-dark)"><?php lp_image( 'logo', array() ); ?><span>La Parada<small>Escuela de tecnificación</small></span></a>
        <p style="margin-top:16px;max-width:34ch">Escuela de tecnificación orientada exclusivamente a la formación de porteros.</p>
      </div>
      <div>
        <h4>Escuela</h4>
        <ul><li><a href="#portero-moderno">Portero moderno</a></li><li><a href="#metodo">Método</a></li><li><a href="#proceso">Proceso</a></li><li><a href="#campus">Campus y eventos</a></li><li><a href="<?php echo esc_url( home_url( '/planes/' ) ); ?>">Planes</a></li></ul>
      </div>
      <div>
        <h4>Contacto</h4>
        <ul><li><a class="wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, me gustaría recibir información sobre La Parada.">WhatsApp</a></li><li><a href="mailto:<?php echo esc_attr( lp_email() ); ?>"><?php echo esc_html( lp_email() ); ?></a></li><li><a href="https://www.instagram.com/laparadaoficial_" target="_blank" rel="noopener">Instagram</a></li><li><a href="https://www.tiktok.com/@laparada_" target="_blank" rel="noopener">TikTok</a></li><li><a href="https://www.youtube.com/channel/UCftYswNeyJ_nl__JTxoA7xQ" target="_blank" rel="noopener">YouTube</a></li></ul>
      </div>
      <div>
        <h4>Más</h4>
        <ul><li><a href="<?php echo esc_url( home_url( '/mi-cuenta/tiendaonline' ) ); ?>">Tienda</a></li><li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li><li><a href="<?php echo esc_url( home_url( '/mi-cuenta' ) ); ?>">Mi cuenta</a></li></ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <?php echo esc_html( date_i18n( 'Y' ) ); ?> La Parada Escuela de Tecnificación S.L.</span>
      <span><a href="<?php echo esc_url( home_url( '/aviso-legal' ) ); ?>" style="padding:0">Aviso legal</a> · <a href="<?php echo esc_url( home_url( '/politica-de-privacidad' ) ); ?>" style="padding:0">Privacidad y cookies</a> · <a href="<?php echo esc_url( home_url( '/terminos-y-condiciones' ) ); ?>" style="padding:0">Términos y condiciones</a></span>
    </div>
  </div>
</footer>

<a class="wa-float wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, me gustaría recibir información sobre la escuela de porteros La Parada." aria-label="Abrir conversación con La Parada en WhatsApp">
  <svg aria-hidden="true"><use href="#i-wa"/></svg>
</a>

<?php wp_footer(); ?>
</body>
</html>

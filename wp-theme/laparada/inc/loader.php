<?php
/**
 * Pantalla de carga de marca (~1,5 s + 0,55 s de salida), en cada página.
 *
 * - CSS y script van en línea en <head> para pintar antes que el resto.
 * - No retrasa la web: se superpone mientras carga y se retira cuando la página está lista
 *   (mínimo 1,5 s para que se vea la animación, máximo 4,5 s por seguridad).
 * - Sin JavaScript, con «reducir movimiento» o desde Personalizar › La Parada, no aparece.
 *
 * @package laparada
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lp_loader_enabled(): bool {
	return ! is_admin()
		&& ! is_customize_preview()
		&& ! is_feed()
		&& ! wp_is_json_request()
		&& (bool) get_theme_mod( 'lp_loader', true );
}

add_action(
	'wp_head',
	static function () {
		if ( ! lp_loader_enabled() ) {
			return;
		}
		$css = file_get_contents( get_theme_file_path( 'css/loader.css' ) ); // phpcs:ignore WordPress.WP.AlternativeFunctions
		echo '<style id="lp-loader-css">' . $css . "</style>\n"; // phpcs:ignore WordPress.Security.EscapeOutput -- Archivo del propio tema.
		?>
<script id="lp-loader-js">
(function(d,w){
	var h=d.documentElement,MIN=1500,MAX=4500,done=false,el;
	if(!w.Promise||(w.matchMedia&&w.matchMedia('(prefers-reduced-motion:reduce)').matches)){return;}
	if(!(w.CSS&&CSS.supports&&CSS.supports('clip-path','inset(0)'))){return;}
	h.classList.add('lp-js');
	function remove(){el=el||d.getElementById('lp-loader');if(el&&el.parentNode){el.parentNode.removeChild(el);}h.classList.remove('lp-js','lp-run','lp-done');}
	function finish(){if(done){return;}done=true;h.classList.add('lp-done');setTimeout(remove,700);}
	w.addEventListener('pageshow',function(e){if(e.persisted){done=true;remove();}});
	setTimeout(finish,MAX);
	var loaded=new Promise(function(r){if(d.readyState==='complete'){r();}else{w.addEventListener('load',r);}});
	function go(){
		var fonts=(d.fonts&&d.fonts.load)?Promise.race([d.fonts.load('800 100px "Barlow Condensed"'),new Promise(function(r){setTimeout(r,700);})]):Promise.resolve();
		Promise.all([fonts.catch(function(){}).then(function(){h.classList.add('lp-run');return new Promise(function(r){setTimeout(r,MIN);});}),loaded]).then(finish);
	}
	if(d.readyState==='loading'){d.addEventListener('DOMContentLoaded',go);}else{go();}
})(document,window);
</script>
		<?php
	},
	0
);

add_action(
	'wp_body_open',
	static function () {
		if ( ! lp_loader_enabled() ) {
			return;
		}
		$d = 'M 0 167 L 77 0 L 142 8 L 136 23 L 88 113 L 82 129 L 126 131 C 148 132 160 146 160 170 C 160 200 137 227 106 233 L 93 233 L 77 269 L 21 265 L 68 174 L 38 168 L 0 169 Z M 20 153 L 20 155 L 62 158 L 85 165 L 39 255 L 70 257 L 88 220 C 106 225 122 218 136 203 C 148 190 151 173 147 158 C 143 146 132 142 110 141 L 67 141 L 63 136 L 92 75 L 122 19 L 91 15 L 84 16 Z M 97 201 L 114 169 C 115 163 118 161 120 164 C 127 173 121 188 112 196 C 105 202 98 204 97 203 Z';
		$letters = '';
		foreach ( str_split( 'LA PARADA' ) as $c ) {
			$letters .= ' ' === $c ? '<span class="sp"></span>' : '<span>' . $c . '</span>';
		}
		?>
<div class="lp-loader" id="lp-loader" aria-hidden="true">
  <div class="lp-loader-row">
    <svg class="lp-loader-logo" viewBox="0 0 160 269" focusable="false"><path pathLength="1" fill-rule="evenodd" d="<?php echo esc_attr( $d ); ?>"/></svg>
    <div class="lp-loader-col">
      <div class="lp-loader-mask"><?php echo $letters; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
      <div class="lp-loader-tag"><?php esc_html_e( 'Escuela de porteros', 'laparada' ); ?></div>
    </div>
  </div>
  <div class="lp-loader-bar"></div>
</div>
		<?php
	},
	1
);

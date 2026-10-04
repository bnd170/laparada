<?php
/**
 * Template Name: Planes
 *
 * Se aplica solo a la página con slug "planes" y está disponible como plantilla en cualquier otra página.
 *
 * @package laparada
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<section class="page-hero" aria-labelledby="planes-title">
  <?php lp_image( 'logo', array( 'class' => 'hero-bolt', 'aria-hidden' => 'true' ) ); ?>
  <div class="container">
    <nav class="crumb" aria-label="Ruta"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a><span aria-hidden="true">/</span><span>Planes</span></nav>
    <p class="eyebrow">Planes · Temporada 2026-2027</p>
    <h1 id="planes-title" class="h-xl" style="margin-top:20px;font-size:clamp(2.8rem,7vw,6rem)">Elige cómo <span class="accent">quieres entrenar.</span></h1>
    <p class="lead">Cambia la frecuencia, no el método. Los dos planes siguen el mismo proceso de tecnificación y trabajan lo técnico, lo táctico y lo mental en grupos reducidos por nivel.</p>

    <ul class="includes includes-wrap" aria-label="Incluido en los dos planes">
      <li><svg aria-hidden="true"><use href="#i-check"/></svg><div><b>Diagnóstico inicial</b><span>Conocemos su nivel antes de asignarle grupo.</span></div></li>
      <li><svg aria-hidden="true"><use href="#i-check"/></svg><div><b>Grupo reducido</b><span>Porteros de su nivel y edad.</span></div></li>
      <li><svg aria-hidden="true"><use href="#i-check"/></svg><div><b>Entrenadores especialistas</b><span>Titulados y exporteros profesionales.</span></div></li>
      <li><svg aria-hidden="true"><use href="#i-check"/></svg><div><b>Técnica, táctica y mente</b><span>Los tres pilares en cada sesión.</span></div></li>
      <li><svg aria-hidden="true"><use href="#i-check"/></svg><div><b>Material exclusivo</b><span>Ejercicios diseñados por porteros.</span></div></li>
      <li><svg aria-hidden="true"><use href="#i-check"/></svg><div><b>Ventajas en eventos</b><span>Descuentos en campus para alumnos.</span></div></li>
    </ul>
  </div>
</section>

<section class="section paper" aria-labelledby="plans-title" style="padding-top:clamp(64px,8vw,104px)">
  <div class="container">
    <div class="sec-head">
      <p class="eyebrow">Escuela de tecnificación</p>
      <h2 id="plans-title" class="h-lg">Mismo método. <span class="accent">Tú eliges los días.</span></h2>
      <p class="lead">Los dos planes incluyen exactamente lo mismo. La única diferencia es cuántos días entrena a la semana. ¿Dudas entre uno y otro? Escríbenos y te ayudamos a decidir según su edad, su nivel y lo que ya entrena con su club.</p>
    </div>

    <div class="plans">
      <article class="plan" aria-labelledby="plan-1">
        <p class="plan-for">1 día por semana</p>
        <h3 id="plan-1">Base</h3>
                <div class="plan-price"><span class="amount">40 €</span><span class="unit">/ mes</span></div>
        <p class="desc">Una sesión a la semana con el método completo. Ideal para empezar o para sumar trabajo específico al entrenamiento del club.</p>
        <ul>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>1 sesión semanal en grupo reducido</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Trabajo técnico, táctico y mental</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Diagnóstico inicial y seguimiento</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Ventajas en campus y eventos</li>
        </ul>
        <a class="btn btn-ghost btn-outline wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, me interesa el plan Base (1 sesión por semana) de La Parada. ¿Me dais más información?"><svg aria-hidden="true"><use href="#i-wa"/></svg>Me interesa</a>
      </article>

      <article class="plan featured" aria-labelledby="plan-2">
        <span class="plan-badge">Recomendado</span>
        <p class="plan-for">2 días por semana</p>
        <h3 id="plan-2">Tecnificación</h3>
                <div class="plan-price"><span class="amount">60 €</span><span class="unit">/ mes</span></div>
        <p class="desc">El mismo método con el doble de frecuencia. Más repeticiones para consolidar cada gesto y llevarlo antes a la competición.</p>
        <ul>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>2 sesiones semanales en grupo reducido</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Trabajo técnico, táctico y mental</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Diagnóstico inicial y seguimiento</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Ventajas en campus y eventos</li>
        </ul>
        <a class="btn btn-wa wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, me interesa el plan Tecnificación (2 sesiones por semana) de La Parada. ¿Me dais más información?"><svg aria-hidden="true"><use href="#i-wa"/></svg>Me interesa</a>
      </article>

    </div>
  </div>
</section>

<section class="section paper" aria-labelledby="start-title" style="padding-top:0">
  <div class="container">
    <div class="sec-head" style="margin-bottom:40px;padding-top:clamp(56px,7vw,88px);border-top:1px solid var(--line-paper)">
      <p class="eyebrow">Cómo empezar</p>
      <h2 id="start-title" class="h-lg">Tres pasos <span class="accent">hasta su primera sesión.</span></h2>
    </div>
    <ol class="start">
      <li><span class="n" aria-hidden="true">1</span><h3>Escríbenos</h3><p>Abre un WhatsApp y cuéntanos la edad del portero, su experiencia y dónde juega.</p></li>
      <li><span class="n" aria-hidden="true">2</span><h3>Te orientamos</h3><p>Te proponemos el plan, el grupo y el horario que mejor le encajan.</p></li>
      <li><span class="n" aria-hidden="true">3</span><h3>Primera sesión</h3><p>Hacemos el diagnóstico inicial en el campo y empieza su proceso de tecnificación.</p></li>
    </ol>
  </div>
</section>

<section class="section" aria-labelledby="campus-title">
  <div class="container">
    <div class="extra">
      <div class="extra-body">
        <p class="eyebrow">Campus y eventos</p>
        <h2 id="campus-title" class="h-md" style="margin-top:16px">Navidad, Semana Santa y verano</h2>
        <p class="lead">Los campus, sesiones intensivas y batallas de porteros se contratan aparte y están abiertos a cualquier portero. Los alumnos de la escuela tienen descuentos y ventajas.</p>
        <a class="btn btn-wa wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, quiero información y precios de los próximos campus de La Parada."><svg aria-hidden="true"><use href="#i-wa"/></svg>Pregunta por el próximo campus</a>
      </div>
      <figure><?php lp_image( 'planes_extra', array( 'loading' => 'lazy' ) ); ?></figure>
    </div>

    <div class="faq-grid" style="margin-top:clamp(72px,9vw,120px)">
      <div class="sec-head" style="margin-bottom:0">
        <p class="eyebrow">Preguntas frecuentes</p>
        <h2 class="h-lg">Antes de <span class="accent">empezar.</span></h2>
        <p class="lead">¿Tienes otra duda? Pregúntanos por WhatsApp y te respondemos.</p>
      </div>
      <div class="faq">
        <details open><summary>¿Desde qué edad se puede empezar?</summary><p>Formamos porteros a partir de los 5 años y los acompañamos hasta su desarrollo adulto. Los grupos se organizan por edad y nivel.</p></details>
        <details><summary>¿Necesita experiencia previa como portero?</summary><p>No. El diagnóstico inicial nos sirve para ubicarle en el grupo adecuado, tanto si se pone los guantes por primera vez como si ya compite.</p></details>
        <details><summary>¿Es compatible con los entrenamientos de su club?</summary><p>Sí. La escuela complementa el trabajo del club con entrenamiento específico del puesto, que es justo lo que muchos equipos no pueden ofrecer.</p></details>
        <details><summary>¿Qué material necesita?</summary><p>Guantes de portero y ropa deportiva cómoda. Si necesitas equiparte, en nuestra <a href="<?php echo esc_url( home_url( '/mi-cuenta/tiendaonline' ) ); ?>" style="color:var(--lime)">tienda</a> tienes guantes y ropa diseñados por porteros.</p></details>
        <details><summary>¿Cuántos alumnos hay por grupo?</summary><p>Trabajamos en grupos reducidos para poder corregir a cada alumno de forma individual. Te contamos los detalles de su grupo cuando hablemos.</p></details>
      </div>
    </div>
  </div>
</section>

<section class="section final" aria-labelledby="final-title">
  <?php lp_image( 'final_bg', array( 'class' => 'bg', 'loading' => 'lazy' ) ); ?>
  <div class="container">
    <p class="eyebrow">Plazas limitadas por grupo</p>
    <h2 id="final-title" class="h-lg" style="margin-top:20px">¿Hablamos de <span class="accent">su plan?</span></h2>
    <p class="lead">Cuéntanos cómo es tu portero y te decimos qué plan le encaja mejor.</p>
    <div class="btn-row">
      <a class="btn btn-wa wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, quiero que me ayudéis a elegir el plan de La Parada que mejor le encaja a mi portero.">
        <svg aria-hidden="true"><use href="#i-wa"/></svg>Abrir conversación en WhatsApp
      </a>
      <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/#metodo' ) ); ?>">Conocer el método</a>
    </div>
    <small>WhatsApp +34 610 383 953 · <?php echo esc_html( lp_email() ); ?></small>
  </div>
</section>

<?php
get_footer();

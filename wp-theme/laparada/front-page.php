<?php
/**
 * Portada: portero moderno, método, proceso, campus y material.
 *
 * @package laparada
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<!-- HERO -->
<section class="hero" aria-labelledby="hero-title">
  <img class="hero-bolt" src="<?php echo esc_url( lp_asset( 'logo.png' ) ); ?>" alt="" aria-hidden="true">
  <div class="container hero-grid">
    <div>
      <p class="eyebrow">Escuela de tecnificación · solo porteros</p>
      <h1 id="hero-title" class="h-xl" style="margin-top:22px">
        <span class="line">Formamos al</span>
        <span class="line accent">portero</span>
        <span class="line stroke">moderno</span>
      </h1>
      <p class="lead">Un proceso de tecnificación pensado para el puesto más exigente del campo. Desarrollamos a cada alumno en lo <strong style="color:var(--on-dark)">técnico</strong>, lo <strong style="color:var(--on-dark)">táctico</strong> y lo <strong style="color:var(--on-dark)">mental</strong>, desde su primer guante hasta la etapa adulta.</p>
      <div class="btn-row">
        <a class="btn btn-wa wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, quiero información sobre la escuela de tecnificación de porteros La Parada.">
          <svg aria-hidden="true"><use href="#i-wa"/></svg>Escríbenos por WhatsApp
        </a>
        <a class="btn btn-ghost" href="#proceso">Ver el proceso</a>
      </div>
      <div class="hero-facts">
        <div><b>5 años</b><span>Edad para empezar</span></div>
        <div><b>Grupos</b><span>reducidos y por nivel</span></div>
        <div><b>3 pilares</b><span>Técnica · Táctica · Mente</span></div>
      </div>
    </div>
    <div class="hero-media">
      <div class="main"><img src="<?php echo esc_url( lp_asset( 'g13.webp' ) ); ?>" alt="Alumno de La Parada blocando el balón en el suelo tras una estirada junto al poste" width="900" height="1343" fetchpriority="high"></div>
      <div class="inset"><img src="<?php echo esc_url( lp_asset( 'g12.webp' ) ); ?>" alt="Portero saltando para atrapar un balón alto" width="900" height="1349"></div>
      <span class="hero-tag">Por porteros, para porteros</span>
    </div>
  </div>
</section>

<div class="marquee" aria-hidden="true">
  <div class="marquee-track">
    <span>Técnica</span><span>Táctica</span><span>Mente</span><span>Juego aéreo</span><span>Toma de decisión</span><span>Juego con los pies</span><span>Asumir el error</span>
    <span>Técnica</span><span>Táctica</span><span>Mente</span><span>Juego aéreo</span><span>Toma de decisión</span><span>Juego con los pies</span><span>Asumir el error</span>
  </div>
</div>

<!-- PORTERO MODERNO -->
<section class="section paper" id="portero-moderno" aria-labelledby="moderno-title">
  <div class="container">
    <div class="moderno-grid">
      <figure class="moderno-media reveal" style="margin:0">
        <img src="<?php echo esc_url( lp_asset( 'g16.webp' ) ); ?>" alt="Portero de La Parada solo en el campo, levantando el brazo para ordenar a sus compañeros" width="900" height="1200" loading="lazy">
        <figcaption><b>Último defensor, primer atacante.</b><br>El portero de hoy participa en todo el juego.</figcaption>
      </figure>
      <div>
        <div class="sec-head reveal" style="margin-bottom:0">
          <p class="eyebrow">El portero moderno</p>
          <h2 id="moderno-title" class="h-lg">Ya no solo para. <span class="accent">Juega, decide y lidera.</span></h2>
          <p class="lead">El fútbol ha cambiado y la portería con él. Hoy el portero inicia el juego, defiende el espacio a la espalda de su defensa, ordena al equipo y gestiona en segundos el peso de cada acierto y cada error. Su posición es única, y por eso merece una formación específica.</p>
        </div>
        <ol class="traits">
          <li class="reveal"><span class="n">01</span><div><h3>Domina el espacio</h3><p>Lee la profundidad de la jugada y sale con criterio, dentro y fuera del área, para cortar antes de tener que parar.</p></div></li>
          <li class="reveal"><span class="n">02</span><div><h3>Juega con los pies</h3><p>Control, pase y desplazamiento del balón en corto y en largo para ser el primer pase del equipo.</p></div></li>
          <li class="reveal"><span class="n">03</span><div><h3>Decide rápido</h3><p>Blocar, despejar, salir o esperar: elige con información y en décimas de segundo.</p></div></li>
          <li class="reveal"><span class="n">04</span><div><h3>Comunica y lidera</h3><p>Ordena a su defensa, transmite seguridad y se convierte en una referencia para sus compañeros.</p></div></li>
          <li class="reveal"><span class="n">05</span><div><h3>Es fuerte de cabeza</h3><p>Asume el error, se recupera al instante y está preparado para la siguiente acción.</p></div></li>
        </ol>
      </div>
    </div>
    <div class="versus reveal">
      <div class="versus-label">Del portero de antes al de ahora</div>
      <div><s>Reacciona</s><strong>Anticipa</strong></div>
      <div><s>Espera bajo palos</s><strong>Domina el área</strong></div>
      <div><s>Despeja y ya</s><strong>Inicia el juego</strong></div>
      <div><s>Juega en silencio</s><strong>Dirige al equipo</strong></div>
    </div>
  </div>
</section>

<!-- MÉTODO / PILARES -->
<section class="section" id="metodo" aria-labelledby="metodo-title">
  <div class="container">
    <div class="sec-head reveal">
      <p class="eyebrow">Nuestro método</p>
      <h2 id="metodo-title" class="h-lg">Tres dimensiones. <span class="accent">Un mismo portero.</span></h2>
      <p class="lead">Un portero completo no se construye a base de paradas sueltas. Cada sesión combina el gesto técnico, su aplicación táctica en situaciones reales de juego y el trabajo mental que permite rendir cuando más importa.</p>
    </div>

    <div class="pillars">
      <article class="pillar" aria-labelledby="p1">
        <div class="pillar-media reveal">
          <img src="<?php echo esc_url( lp_asset( 'g04.webp' ) ); ?>" alt="Portera con equipación verde atrapando un balón alto en plena estirada" width="900" height="1350" loading="lazy">
          <span class="pillar-num" aria-hidden="true">01</span>
        </div>
        <div class="reveal">
          <p class="pillar-kicker">Técnica</p>
          <h3 id="p1">La base que sostiene cada parada</h3>
          <p>Trabajamos los gestos específicos del puesto, desde la posición básica hasta la acción final, con una progresión adaptada a la edad y al nivel de cada alumno. Repetición de calidad, corrección individual y un nivel de exigencia que convierte la técnica en automatismo.</p>
          <p class="chips-title">Qué trabajamos</p>
          <ul class="chips">
            <li>Técnica específica del portero</li><li>Blocaje y despeje orientado</li><li>Juego aéreo</li><li>Habilidad con los pies</li><li>Desplazamiento del balón</li><li>Velocidad de reacción</li><li>Potencia de salto</li><li>Agilidad y coordinación</li><li>Fuerza y resistencia</li>
          </ul>
          <p class="how"><b>Cómo:</b> material y ejercicios exclusivos, diseñados por porteros para porteros, con feedback individual en cada repetición.</p>
        </div>
      </article>

      <article class="pillar" aria-labelledby="p2">
        <div class="pillar-media reveal">
          <img src="<?php echo esc_url( lp_asset( 'g20.webp' ) ); ?>" alt="Vista aérea de un ejercicio de porteros frente a la portería con conos y balones" width="900" height="1200" loading="lazy">
          <span class="pillar-num" aria-hidden="true">02</span>
        </div>
        <div class="reveal">
          <p class="pillar-kicker">Táctica</p>
          <h3 id="p2">Entender el juego para anticiparse</h3>
          <p>El mejor portero no es el que más para, sino el que menos lo necesita porque está bien colocado. Llevamos cada gesto técnico a situaciones reales de partido para que el alumno aprenda a leer la jugada, ocupar el espacio correcto y participar en el juego colectivo.</p>
          <p class="chips-title">Qué trabajamos</p>
          <ul class="chips">
            <li>Control del espacio</li><li>Toma de decisión</li><li>Conceptos tácticos</li><li>Posicionamiento</li><li>Lectura de la jugada</li><li>Comunicación con la defensa</li><li>Trabajo grupal</li>
          </ul>
          <p class="how"><b>Cómo:</b> ejercicios basados en acciones que se repiten en competición, para que lo entrenado se note el fin de semana.</p>
        </div>
      </article>

      <article class="pillar" aria-labelledby="p3">
        <div class="pillar-media reveal">
          <img src="<?php echo esc_url( lp_asset( 'g17.webp' ) ); ?>" alt="Vista aérea de un grupo de alumnos en círculo durante una charla de entrenamiento" width="900" height="1617" loading="lazy" style="object-position:50% 45%">
          <span class="pillar-num" aria-hidden="true">03</span>
        </div>
        <div class="reveal">
          <p class="pillar-kicker">Mental</p>
          <h3 id="p3">La cabeza también se entrena</h3>
          <p>El portero vive en la frontera entre el acierto y el error, y un fallo suyo casi siempre acaba en el marcador. Trabajamos la confianza, la concentración y la gestión de la frustración para que cada alumno aprenda a asumir el error, levantarse y competir con seguridad.</p>
          <p class="chips-title">Qué trabajamos</p>
          <ul class="chips">
            <li>Asumir el error</li><li>Seguridad y confianza</li><li>Aspectos psicológicos</li><li>Concentración</li><li>Gestión de la frustración</li><li>Liderazgo</li><li>Afán de superación</li>
          </ul>
          <p class="how"><b>Cómo:</b> un ambiente familiar pero exigente, donde equivocarse forma parte del aprendizaje y cada mejora se reconoce.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- PROCESO -->
<section class="section paper" id="proceso" aria-labelledby="proceso-title">
  <div class="container">
    <div class="sec-head reveal">
      <p class="eyebrow">Proceso de tecnificación</p>
      <h2 id="proceso-title" class="h-lg">Un camino, <span class="accent">no un entrenamiento suelto.</span></h2>
      <p class="lead">Acompañamos al portero desde su etapa inicial hasta su desarrollo adulto. En cada etapa seguimos el mismo ciclo: identificar, adaptar y llevar cada técnica del conocimiento a la competición.</p>
    </div>

    <div class="stages reveal" role="list" aria-label="Etapas de formación">
      <div role="listitem"><small>Desde los 5 años</small><strong>Iniciación</strong></div>
      <div role="listitem"><small>Fundamentos</small><strong>Formación</strong></div>
      <div role="listitem"><small>Especialización</small><strong>Tecnificación</strong></div>
      <div role="listitem"><small>Hasta la etapa adulta</small><strong>Rendimiento</strong></div>
    </div>

    <ol class="steps">
      <li class="step reveal"><span class="step-dot" aria-hidden="true">01</span><div><h3>Identificamos</h3><p>Observamos al alumno en sesión para conocer su nivel, su edad y su momento de desarrollo, y detectar qué aspectos debe mejorar.</p></div></li>
      <li class="step reveal"><span class="step-dot" aria-hidden="true">02</span><div><h3>Adaptamos</h3><p>Le asignamos un grupo reducido de su nivel y ajustamos los entrenamientos a sus objetivos concretos.</p></div></li>
      <li class="step reveal"><span class="step-dot" aria-hidden="true">03</span><div><h3>Conocer</h3><p>Explicamos el porqué de cada gesto: qué hacer, cuándo hacerlo y para qué sirve en el partido.</p></div></li>
      <li class="step reveal"><span class="step-dot" aria-hidden="true">04</span><div><h3>Practicar</h3><p>Repetición guiada con corrección individual, aumentando progresivamente la velocidad y la dificultad.</p></div></li>
      <li class="step reveal"><span class="step-dot" aria-hidden="true">05</span><div><h3>Profesionalizar</h3><p>Exigencia y situaciones reales de juego hasta que la técnica sale sola en competición.</p></div></li>
    </ol>
    <p class="cycle-note reveal">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3 12a9 9 0 0 1 15.5-6.2L21 8M21 3v5h-5M21 12a9 9 0 0 1-15.5 6.2L3 16M3 21v-5h5"/></svg>
      Cada objetivo conseguido abre uno nuevo: el ciclo vuelve a empezar con más exigencia.
    </p>
  </div>
</section>

<!-- CTA BAND -->
<section class="band" aria-labelledby="band-title">
  <div class="container">
    <div>
      <h2 id="band-title">¿En qué punto está tu portero?</h2>
      <p>Cuéntanos su edad, su experiencia y dónde juega. Te orientamos sobre el grupo y el plan que mejor le encajan.</p>
    </div>
    <a class="btn btn-dark wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, me gustaría que me orientarais sobre el grupo ideal para mi portero. Edad: … / Experiencia: … / Equipo: …">
      <svg aria-hidden="true"><use href="#i-wa"/></svg>Cuéntanoslo por WhatsApp
    </a>
  </div>
</section>

<!-- DIFERENCIALES -->
<section class="section" aria-labelledby="dif-title">
  <div class="container">
    <div class="sec-head reveal">
      <p class="eyebrow">Por qué La Parada</p>
      <h2 id="dif-title" class="h-lg">Especialistas en <span class="accent">una sola posición.</span></h2>
      <p class="lead">Somos una escuela orientada exclusivamente a la formación de porteros. Entrenadores titulados, exporteros profesionales y colaboradores que transmiten su experiencia sin olvidar lo más importante: disfrutar de este deporte.</p>
    </div>
    <figure class="team-photo reveal" style="margin:0">
      <img src="<?php echo esc_url( lp_asset( 'hero.webp' ) ); ?>" alt="Grupo de alumnos y entrenadores de La Parada posando en el campo" width="1400" height="840" loading="lazy">
      <p>Un equipo de porteros.<br><span class="accent">Para porteros.</span></p>
    </figure>
    <div class="diffs">
      <div class="diff reveal">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        <h3>Grupos reducidos</h3><p>Para personalizar al máximo cada sesión y que cada alumno reciba correcciones individuales.</p>
      </div>
      <div class="diff reveal">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M18 11V6a2 2 0 0 0-4 0M14 10V4a2 2 0 0 0-4 0v2M10 10.5V6a2 2 0 0 0-4 0v8M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15"/></svg>
        <h3>Diseñado por porteros</h3><p>Material y sesiones exclusivas creadas por exporteros que conocen el puesto desde dentro.</p>
      </div>
      <div class="diff reveal">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        <h3>Desde los 5 años</h3><p>Acompañamos al portero en cada etapa, desde la iniciación hasta el desarrollo adulto.</p>
      </div>
      <div class="diff reveal">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/></svg>
        <h3>Familiar y exigente</h3><p>Un ambiente cercano donde se compite con deportividad y se valora el esfuerzo de cada uno.</p>
      </div>
    </div>
  </div>
</section>

<!-- GALERÍA -->
<section class="section" style="padding-top:0" aria-labelledby="gal-title">
  <div class="container">
    <div class="sec-head reveal">
      <p class="eyebrow">Así entrenamos</p>
      <h2 id="gal-title" class="h-lg">Sesiones reales. <span class="accent">Porteros reales.</span></h2>
    </div>
    <div class="gallery">
      <figure><img src="<?php echo esc_url( lp_asset( 'g03.webp' ) ); ?>" alt="Portero estirándose para blocar un balón raso durante un ejercicio" width="1400" height="837" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g05.webp' ) ); ?>" alt="Portero saltando para atrapar un balón alto" width="900" height="1522" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g08.webp' ) ); ?>" alt="Alumno con la camiseta negra de La Parada" width="900" height="1611" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g14.webp' ) ); ?>" alt="Grupo de porteros esperando su turno frente a la portería" width="1400" height="837" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g06.webp' ) ); ?>" alt="Vista aérea de una escalera de coordinación en el césped" width="900" height="1607" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g19.webp' ) ); ?>" alt="Portero realizando una parada acrobática" width="900" height="1608" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g01.webp' ) ); ?>" alt="Alumnos trabajando desplazamientos con balón" width="1400" height="840" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g09.webp' ) ); ?>" alt="Portero en carrera entre conos de agilidad" width="900" height="1617" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g02.webp' ) ); ?>" alt="Ejercicio de porteros en la portería con el entrenador" width="900" height="1200" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g11.webp' ) ); ?>" alt="Vista aérea de un ejercicio con colchoneta azul" width="900" height="1608" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'g07.webp' ) ); ?>" alt="Portero de espaldas preparado para la siguiente acción" width="900" height="1340" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'hero2.webp' ) ); ?>" alt="Varios porteros entrenando en el campo" width="1400" height="837" loading="lazy"></figure>
    </div>
  </div>
</section>

<!-- VALORES -->
<section class="section paper" aria-labelledby="val-title">
  <div class="container values-grid">
    <div class="reveal">
      <p class="eyebrow">Valores</p>
      <h2 id="val-title" class="h-lg" style="margin-top:20px">Formamos porteros. <span class="accent">Y personas.</span></h2>
      <p class="lead" style="margin-top:22px">El deporte es mucho más que desarrollo físico: es un medio para construir valores personales y sociales que acompañan toda la vida.</p>
      <p class="lead">Trabajamos de forma amistosa pero competitiva, poniendo en lo más alto la deportividad, la disciplina y el afán de superación de cada alumno.</p>
    </div>
    <ul class="values reveal" aria-label="Valores que trabajamos">
      <li>Afán de superación</li><li>Perseverancia</li><li>Trabajo en equipo</li><li>Aprender del error</li><li>Gestión de la frustración</li><li>Autodisciplina</li><li>Responsabilidad</li><li>Honestidad</li><li>Cooperación</li><li>Lealtad</li><li>Integración</li>
    </ul>
  </div>
</section>

<!-- CAMPUS -->
<section class="section" id="campus" aria-labelledby="campus-title">
  <div class="container">
    <div class="sec-head reveal">
      <p class="eyebrow">Campus y eventos</p>
      <h2 id="campus-title" class="h-lg">Más horas de portería <span class="accent">durante todo el año.</span></h2>
      <p class="lead">Además de la escuela, organizamos sesiones intensivas, campus y batallas de porteros, con ventajas para nuestros alumnos.</p>
    </div>
    <div class="campus">
      <article class="camp reveal">
        <img src="<?php echo esc_url( lp_asset( 'g18.webp' ) ); ?>" alt="Grupo de alumnos y entrenadores en la grada tras un evento" width="900" height="1352" loading="lazy">
        <div class="camp-body"><span class="camp-when">Navidad</span><h3>Eventos especiales</h3><p>Jornadas temáticas y batallas de porteros para cerrar el año compitiendo.</p></div>
      </article>
      <article class="camp reveal">
        <img src="<?php echo esc_url( lp_asset( 'g15.webp' ) ); ?>" alt="Alumnos sentados en el césped durante un descanso del campus" width="800" height="450" loading="lazy">
        <div class="camp-body"><span class="camp-when">Semana Santa</span><h3>Campus intensivo</h3><p>Varios días seguidos de entrenamiento con mayor enfoque y volumen de trabajo.</p></div>
      </article>
      <article class="camp reveal">
        <img src="<?php echo esc_url( lp_asset( 'g21.webp' ) ); ?>" alt="Vista aérea de un ejercicio de porteros en el área" width="894" height="1474" loading="lazy">
        <div class="camp-body"><span class="camp-when">Verano</span><h3>Escuelas de tecnificación</h3><p>Para seguir progresando cuando la temporada para y llegar listo a la siguiente.</p></div>
      </article>
    </div>
    <div class="campus-foot reveal">
      <a class="btn btn-wa wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, quiero información sobre los próximos campus y eventos de La Parada.">
        <svg aria-hidden="true"><use href="#i-wa"/></svg>Avísame del próximo campus
      </a>
      <a class="link-arrow" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Ver novedades en el blog <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
    </div>
  </div>
</section>

<!-- MATERIAL -->
<section class="section paper" aria-labelledby="gear-title" style="padding-block:clamp(64px,8vw,104px)">
  <div class="container">
    <div class="gear-head reveal">
      <div>
        <p class="eyebrow">Equipamiento propio</p>
        <h2 id="gear-title" class="h-md" style="margin-top:16px">Guantes diseñados <span class="accent">por porteros.</span></h2>
      </div>
      <a class="link-arrow" href="<?php echo esc_url( home_url( '/mi-cuenta/tiendaonline' ) ); ?>">Ir a la tienda <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
    </div>
    <div class="gear reveal">
      <figure><img src="<?php echo esc_url( lp_asset( 'guante-1.webp' ) ); ?>" alt="Guantes La Parada blancos y azules" width="400" height="400" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'guante-2.webp' ) ); ?>" alt="Guantes La Parada negros" width="400" height="400" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'guante-3.webp' ) ); ?>" alt="Guantes La Parada blancos" width="400" height="400" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'guante-4.webp' ) ); ?>" alt="Guantes La Parada azules con detalles en lima" width="400" height="400" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'guante-5.webp' ) ); ?>" alt="Guantes La Parada negros con logo rosa" width="400" height="400" loading="lazy"></figure>
      <figure><img src="<?php echo esc_url( lp_asset( 'guante-6.webp' ) ); ?>" alt="Guantes La Parada blancos con detalles en amarillo flúor" width="400" height="400" loading="lazy"></figure>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="section final" aria-labelledby="final-title">
  <img class="bg" src="<?php echo esc_url( lp_asset( 'g05.webp' ) ); ?>" alt="" loading="lazy">
  <div class="container">
    <p class="eyebrow">Plazas limitadas por grupo</p>
    <h2 id="final-title" class="h-lg" style="margin-top:20px">Su próxima parada empieza <span class="accent">con un mensaje.</span></h2>
    <p class="lead">Escríbenos y te contamos cómo trabajamos, qué grupo encaja con tu portero y cómo empezar. Te responde una persona del equipo, no un bot.</p>
    <div class="btn-row">
      <a class="btn btn-wa wa" href="<?php echo esc_url( lp_wa_url() ); ?>" data-msg="Hola, quiero que mi portero empiece en La Parada. ¿Me contáis cómo funciona?">
        <svg aria-hidden="true"><use href="#i-wa"/></svg>Abrir conversación en WhatsApp
      </a>
      <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/planes/' ) ); ?>">Ver planes</a>
    </div>
    <small>o por email en <a href="mailto:<?php echo esc_attr( lp_email() ); ?>"><?php echo esc_html( lp_email() ); ?></a></small>
  </div>
</section>

<?php
get_footer();

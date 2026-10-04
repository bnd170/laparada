<?php
/**
 * Imágenes por defecto del diseño (archivos de assets/) y su descripción.
 * Si no se configura nada en el administrador, la web se ve con estas.
 *
 * @package laparada
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Secciones del administrador, en orden. */
function lp_image_groups(): array {
	return array(
		'marca'   => __( 'Marca', 'laparada' ),
		'portada' => __( 'Portada', 'laparada' ),
		'moderno' => __( 'Portero moderno', 'laparada' ),
		'metodo'  => __( 'Método (3 pilares)', 'laparada' ),
		'equipo'  => __( 'Equipo', 'laparada' ),
		'campus'  => __( 'Campus y eventos', 'laparada' ),
		'cierre'  => __( 'Cierre y Planes', 'laparada' ),
	);
}

/** Imágenes sueltas: una por hueco del diseño. */
function lp_image_slots(): array {
	return array(
		'logo' => array(
			'group' => 'marca',
			'label' => 'Logo',
			'hint'  => 'PNG con fondo transparente. Se usa en la cabecera, el pie y como marca de agua del hero.',
			'file'  => 'logo.png',
			'alt'   => '',
			'w'     => 30,
			'h'     => 40,
			'size'  => 'medium',
		),
		'hero_main' => array(
			'group' => 'portada',
			'label' => 'Hero · foto principal',
			'hint'  => 'Vertical (aprox. 2:3). Mín. 900 px de ancho. Es la imagen que más pesa: usa una foto bien comprimida.',
			'file'  => 'g13.webp',
			'alt'   => 'Alumno de La Parada blocando el balón en el suelo tras una estirada junto al poste',
			'w'     => 900,
			'h'     => 1343,
			'size'  => 'large',
		),
		'hero_inset' => array(
			'group' => 'portada',
			'label' => 'Hero · foto pequeña',
			'hint'  => 'Vertical (aprox. 2:3). Se muestra superpuesta en la esquina.',
			'file'  => 'g12.webp',
			'alt'   => 'Portero saltando para atrapar un balón alto',
			'w'     => 900,
			'h'     => 1349,
			'size'  => 'medium_large',
		),
		'moderno' => array(
			'group' => 'moderno',
			'label' => 'Portero moderno',
			'hint'  => 'Vertical (3:4). Va junto a la lista de rasgos.',
			'file'  => 'g16.webp',
			'alt'   => 'Portero de La Parada solo en el campo, levantando el brazo para ordenar a sus compañeros',
			'w'     => 900,
			'h'     => 1200,
			'size'  => 'large',
		),
		'pilar_tecnica' => array(
			'group' => 'metodo',
			'label' => 'Pilar 01 · Técnica',
			'hint'  => 'Vertical (aprox. 2:3).',
			'file'  => 'g04.webp',
			'alt'   => 'Portera con equipación verde atrapando un balón alto en plena estirada',
			'w'     => 900,
			'h'     => 1350,
			'size'  => 'large',
		),
		'pilar_tactica' => array(
			'group' => 'metodo',
			'label' => 'Pilar 02 · Táctica',
			'hint'  => 'Vertical (3:4).',
			'file'  => 'g20.webp',
			'alt'   => 'Vista aérea de un ejercicio de porteros frente a la portería con conos y balones',
			'w'     => 900,
			'h'     => 1200,
			'size'  => 'large',
		),
		'pilar_mental' => array(
			'group' => 'metodo',
			'label' => 'Pilar 03 · Mental',
			'hint'  => 'Vertical. Se recorta ligeramente.',
			'file'  => 'g17.webp',
			'alt'   => 'Vista aérea de un grupo de alumnos en círculo durante una charla de entrenamiento',
			'w'     => 900,
			'h'     => 1617,
			'size'  => 'large',
		),
		'equipo' => array(
			'group' => 'equipo',
			'label' => 'Foto del equipo',
			'hint'  => 'Horizontal (5:3). Ancho completo: mín. 1400 px.',
			'file'  => 'hero.webp',
			'alt'   => 'Grupo de alumnos y entrenadores de La Parada posando en el campo',
			'w'     => 1400,
			'h'     => 840,
			'size'  => '1536x1536',
		),
		'campus_navidad' => array(
			'group' => 'campus',
			'label' => 'Campus · Navidad',
			'hint'  => 'Vertical.',
			'file'  => 'g18.webp',
			'alt'   => 'Grupo de alumnos y entrenadores en la grada tras un evento',
			'w'     => 900,
			'h'     => 1352,
			'size'  => 'large',
		),
		'campus_semana_santa' => array(
			'group' => 'campus',
			'label' => 'Campus · Semana Santa',
			'hint'  => 'Horizontal (16:9) o vertical; se recorta.',
			'file'  => 'g15.webp',
			'alt'   => 'Alumnos sentados en el césped durante un descanso del campus',
			'w'     => 800,
			'h'     => 450,
			'size'  => 'large',
		),
		'campus_verano' => array(
			'group' => 'campus',
			'label' => 'Campus · Verano',
			'hint'  => 'Vertical.',
			'file'  => 'g21.webp',
			'alt'   => 'Vista aérea de un ejercicio de porteros en el área',
			'w'     => 894,
			'h'     => 1474,
			'size'  => 'large',
		),
		'final_bg' => array(
			'group' => 'cierre',
			'label' => 'Fondo del bloque final',
			'hint'  => 'Se usa como fondo oscurecido en la portada y en Planes. Horizontal, mín. 1600 px.',
			'file'  => 'g05.webp',
			'alt'   => '',
			'w'     => 900,
			'h'     => 1522,
			'size'  => '1536x1536',
		),
		'planes_extra' => array(
			'group' => 'cierre',
			'label' => 'Planes · bloque de campus',
			'hint'  => 'Imagen junto al texto de campus en la página Planes.',
			'file'  => 'g18.webp',
			'alt'   => 'Alumnos y entrenadores de La Parada en la grada tras un evento',
			'w'     => 900,
			'h'     => 1353,
			'size'  => 'large',
		),
	);
}

/** Listas de imágenes (galería y guantes): se pueden añadir, quitar y reordenar. */
function lp_image_lists(): array {
	return array(
		'gallery' => array(
			'label' => __( 'Galería «Así entrenamos»', 'laparada' ),
			'hint'  => __( 'Al hacer clic en una imagen se abre en grande. Sube fotos de al menos 900 px de ancho; no importa que sean verticales u horizontales.', 'laparada' ),
			'size'  => 'large',
			'items' => array(
				array( 'file' => 'g03.webp', 'alt' => 'Portero estirándose para blocar un balón raso durante un ejercicio', 'w' => 1400, 'h' => 837 ),
				array( 'file' => 'g05.webp', 'alt' => 'Portero saltando para atrapar un balón alto', 'w' => 900, 'h' => 1522 ),
				array( 'file' => 'g08.webp', 'alt' => 'Alumno con la camiseta negra de La Parada', 'w' => 900, 'h' => 1611 ),
				array( 'file' => 'g14.webp', 'alt' => 'Grupo de porteros esperando su turno frente a la portería', 'w' => 1400, 'h' => 837 ),
				array( 'file' => 'g06.webp', 'alt' => 'Vista aérea de una escalera de coordinación en el césped', 'w' => 900, 'h' => 1607 ),
				array( 'file' => 'g19.webp', 'alt' => 'Portero realizando una parada acrobática', 'w' => 900, 'h' => 1608 ),
				array( 'file' => 'g01.webp', 'alt' => 'Alumnos trabajando desplazamientos con balón', 'w' => 1400, 'h' => 840 ),
				array( 'file' => 'g09.webp', 'alt' => 'Portero en carrera entre conos de agilidad', 'w' => 900, 'h' => 1617 ),
				array( 'file' => 'g02.webp', 'alt' => 'Ejercicio de porteros en la portería con el entrenador', 'w' => 900, 'h' => 1200 ),
				array( 'file' => 'g11.webp', 'alt' => 'Vista aérea de un ejercicio con colchoneta azul', 'w' => 900, 'h' => 1608 ),
				array( 'file' => 'g07.webp', 'alt' => 'Portero de espaldas preparado para la siguiente acción', 'w' => 900, 'h' => 1340 ),
				array( 'file' => 'hero2.webp', 'alt' => 'Varios porteros entrenando en el campo', 'w' => 1400, 'h' => 837 ),
			),
		),
		'gear'    => array(
			'label' => __( 'Guantes', 'laparada' ),
			'hint'  => __( 'Cuadradas, con fondo blanco o transparente. Se muestran 6 por fila en escritorio.', 'laparada' ),
			'size'  => 'medium',
			'items' => array(
				array( 'file' => 'guante-1.webp', 'alt' => 'Guantes La Parada blancos y azules', 'w' => 400, 'h' => 400 ),
				array( 'file' => 'guante-2.webp', 'alt' => 'Guantes La Parada negros', 'w' => 400, 'h' => 400 ),
				array( 'file' => 'guante-3.webp', 'alt' => 'Guantes La Parada blancos', 'w' => 400, 'h' => 400 ),
				array( 'file' => 'guante-4.webp', 'alt' => 'Guantes La Parada azules con detalles en lima', 'w' => 400, 'h' => 400 ),
				array( 'file' => 'guante-5.webp', 'alt' => 'Guantes La Parada negros con logo rosa', 'w' => 400, 'h' => 400 ),
				array( 'file' => 'guante-6.webp', 'alt' => 'Guantes La Parada blancos con detalles en amarillo flúor', 'w' => 400, 'h' => 400 ),
			),
		),
	);
}

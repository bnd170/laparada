<?php
/**
 * Ajustes en Personalizar > La Parada.
 *
 * @package laparada
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'customize_register',
	static function ( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_section(
			'lp_contact',
			array(
				'title'    => __( 'La Parada', 'laparada' ),
				'priority' => 30,
			)
		);

		$wp_customize->add_setting(
			'lp_whatsapp',
			array(
				'default'           => '34610383953',
				'sanitize_callback' => static fn( $v ) => preg_replace( '/\D+/', '', (string) $v ),
			)
		);
		$wp_customize->add_control(
			'lp_whatsapp',
			array(
				'section'     => 'lp_contact',
				'label'       => __( 'WhatsApp (con prefijo, sin +)', 'laparada' ),
				'description' => __( 'Ejemplo: 34610383953', 'laparada' ),
				'type'        => 'text',
			)
		);

		$wp_customize->add_setting(
			'lp_email',
			array(
				'default'           => 'info@laparadaonline.com',
				'sanitize_callback' => 'sanitize_email',
			)
		);
		$wp_customize->add_control(
			'lp_email',
			array(
				'section' => 'lp_contact',
				'label'   => __( 'Email de contacto', 'laparada' ),
				'type'    => 'email',
			)
		);

		$wp_customize->add_setting(
			'lp_uyyy',
			array(
				'default'           => true,
				'sanitize_callback' => 'rest_sanitize_boolean',
			)
		);
		$wp_customize->add_control(
			'lp_uyyy',
			array(
				'section' => 'lp_contact',
				'label'   => __( 'Reproducir el "uyyy" de estadio al entrar', 'laparada' ),
				'type'    => 'checkbox',
			)
		);
	}
);

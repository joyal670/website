<?php
/**
 * Color Scheme
 *
 * @since ttm-business 1.0
 */
return array(
	'title'  => esc_html__( 'Color Scheme', 'ttm-business' ),
	'id'     => 'color_scheme_settings',
	'desc'   => esc_html__( 'Specify website skin, dark and grey color', 'ttm-business' ),
	'icon'   => 'el el-brush', 
	'fields' => array(
		array(
			'id'          => 'primary_color',
			'type'        => 'color',
			'title'       => esc_html__( 'Select Skin Color', 'ttm-business' ),
			'transparent' => false,
			'default'     => '#e12454',
		),
		array(
			'id'          => 'secondary_color',
			'type'        => 'color',
			'title'       => esc_html__( 'Select Primary Dark BG Color', 'ttm-business' ),
			'transparent' => false,
			'default'     => '#13232f',
		),
		array(
			'id'          => 'tertiary_color',
			'type'        => 'color',
			'title'       => esc_html__( 'Select Primary Grey BG Color', 'ttm-business' ),
			'transparent' => false,
			'default'     => '#f4f9fc',
		),
	),
);

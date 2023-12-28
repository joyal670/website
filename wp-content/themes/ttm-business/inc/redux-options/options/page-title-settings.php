<?php 
/**
 * Titlebar Settings
 *
 * @since ttm-business 1.0
 */
return array(
	'title'  => esc_html( 'Titlebar Settings', 'ttm-business' ),
	'id'     => 'page_title_settings',
	'icon'   => 'el el-file-edit',
	'fields' => array(
		array(
			'id'      => 'display_page_title',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Titlebar', 'ttm-business' ),
			'default' => 1,
			'on'      => esc_html__( 'On', 'ttm-business' ),
			'off'     => esc_html__( 'Off', 'ttm-business' ),
		),
		array(
			'id'       => 'page_title_height',
			'type'     => 'slider',
			'title'    => esc_html__( 'Titlebar Height', 'ttm-business' ),
			'desc'     => esc_html__( 'Set height for the page titlebar.', 'ttm-business' ),
			'default'  => 250,
			'min'      => 100,
			'step'     => 1,
			'max'      => 600,
			'required' => array(
				array( 'display_page_title', '=', 1 ),
			),
		),
		array(
			'id'               => 'page_title_banner_image',
			'type'             => 'background',
			'title'            => esc_html__( 'Titlebar Background Image', 'ttm-business' ),
			'desc'             => esc_html__( 'Set page background image.', 'ttm-business' ),
			'background-color' => false,
			'preview_media'    => true,
			'output'           => '.ttm-business-page-title',
			'required'         => array(
				array( 'display_page_title', '=', 1 ),
			),
		),
		array(
			'id'       => 'page_title_background_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Titlebar Background Color', 'ttm-business' ),
			'default' 		   => '#142a42',
			'required' => array(
				array( 'display_page_title', '=', 1 ),
			),
			 'output'    => array('background-color' => '.ttm-business-page-title-layer'),
		),
		array(
				'id' => 'page_titlebar_text_color',
				'type' => 'color',
				'transparent' => false,
				'title' => esc_html__('Titlebar Text Color', 'ttm-business'),
				'default' => '#ffffff',
				'validate' => 'color'
			),
	),
);

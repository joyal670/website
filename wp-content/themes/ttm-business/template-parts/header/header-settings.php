<?php
/**
 * Header Settings
 *
 * @since ttm-business 1.0
 */
return array(
	'title'  => esc_html( 'Header Settings', 'ttm-business' ),
	'id'     => 'header_settings',
	'icon'   => 'el el-credit-card',
	'fields' => array(
		array(
			'id'       => 'header-layout',
			'type'     => 'select',
			'title'    => esc_html( 'Select Header Style', 'ttm-business' ),
			'subtitle' => esc_html( 'Please select the header style to display.', 'ttm-business' ),
			'options'  => array(
				'layout-1' => esc_html( 'Header Style 1', 'ttm-business' ),
				'layout-2' => esc_html( 'Header Style 2', 'ttm-business' ),
				'layout-3' => esc_html( 'Header Style 3', 'ttm-business' ),
			),
			'default'  => 'layout-1',
		),
		array(
			'id'       => 'height_height',
			'type'     => 'slider',
			'title'    => esc_html__( 'Header Height (in pixel)', 'ttm-business' ),
			'desc'     => esc_html__( 'You can set height of header area from here', 'ttm-business' ),
			'default'  => 100,
			'min'      => 70,
			'step'     => 1,
			'max'      => 350,
		),
		array(
			'id'          => 'height_background',
			'type'        => 'color',
			'title'       => esc_html__( 'Select Header Background Color', 'ttm-business' ),
			'transparent' => false,
			'default'     => '#ffffff',
		),
		array(
			'id'       => 'display-search-icon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show Search Button', 'ttm-business' ),
			'default'  => 0,
			'subtitle' => esc_html__( 'Show search button in header.', 'ttm-business' ),
			'on'       => esc_html__( 'On', 'ttm-business' ),
			'off'      => esc_html__( 'Off', 'ttm-business' ),
		),
		array(
			'id'       => 'header_button_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Header Button', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter header button title.', 'ttm-business' ),
		),
		array(
			'id'       => 'header_button_liink',
			'type'     => 'text',
			'title'    => esc_html__( 'Header Button link', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter header button link.', 'ttm-business' ),
		),
		array(
			'id'       => 'site-logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Image', 'ttm-business' ),
			'compiler' => 'true',
			'subtitle' => esc_html__( 'Upload image that will be used as logo for the site NOTE: Upload image that will be used as logo for the site', 'ttm-business' ),
		),
		array(
			'id'       => 'site-logo-height',
			'type'     => 'dimensions',
			'title'    => esc_html__( 'Logo Max Height', 'ttm-business' ),
			'compiler' => 'true',
			'width'    => false,
			'units'    => array( 'px' ),
			'subtitle' => esc_html__( 'If you feel your logo looks small than increase this and adjust it', 'ttm-business' ),
			'default'  => array(
				'height' => '50',
				'units'  => 'px',
			),
		),
		array(
			'id' 		=> 'header-menu-position',
			'type' 		=> 'select',
			'title'		=> esc_html__('Header Menu Position', 'ttm-business'),
			'options'   => array(
				'left'   => 'Left Align',
				'center' => 'Center Align',
				'right'  => 'Right Align',
			),
			'default' => 'center'
		),
		array(
			'id' 		=> 'headers-layout',
			'type' 		=> 'select',
			'title'		=> esc_html__('Header Layout', 'ttm-business'),
			'options'   => array(
				'wide'     => 'Wide',
				'fullwide' => 'Fullwide',
			),
			'default' => 'wide'
		),
		array(
			'id'       => 'headerbox_cta_text',
			'type'     => 'editor',
			'title'    => esc_html__( 'Header CTA Text', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter the header CTA text', 'ttm-business' ),
			'default' => '',
				'args'   => array(
				'teeny'  => true,
				'textarea_rows' => 3,
				'media_buttons' => false,
			  )
		),
		
		array(
			'id'       => 'center_logo_width',
			'type'     => 'slider',
			'title'    => esc_html__( 'Logo Area Width (pixel)', 'ttm-business' ),
			'desc'     => esc_html__( 'You can center logo width from here', 'ttm-business' ),
			'default'  => 370,
			'min'      => 70,
			'step'     => 1,
			'max'      => 550,
			'required'         => array(
				array( 'header-layout', '=', 'layout-2' ),
			),
		),
		array(
			'id'       => 'first_menu_margin',
			'type'     => 'slider',
			'title'    => esc_html__( 'Menu Left margin (pixel)', 'ttm-business' ),
			'desc'     => esc_html__( 'You can set menu left margin from here', 'ttm-business' ),
			'default'  => 50,
			'min'      => 70,
			'step'     => 1,
			'max'      => 550,
			'required'         => array(
				array( 'header-layout', '=', 'layout-2' ),
			),
		),
		array(
			'id'       => 'header_wstyle',
			'type'     => 'select',
			'title'    => esc_html( 'Select Header Layout Style', 'ttm-business' ),
			'options'  => array(
				'wide' 		=> esc_html( 'Wide', 'ttm-business' ),
				'full-wide' => esc_html( 'Full Wide', 'ttm-business' ),
			),
			'default'  => 'wide',
		),
	),
);

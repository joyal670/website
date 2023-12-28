<?php
/**
 * Footer Settings
 *
 * @since ttm-business 1.0
 */
return array(
	'title'  => esc_html( 'Footer Settings', 'ttm-business' ),
	'id'     => 'footer_settings',
	'icon'   => 'el el-align-center',
	'fields' => array(
		array(
			'id'       => 'footer_layout',
			'type'     => 'image_select',
			'title'    => esc_html( 'Footer Column layout', 'ttm-business' ),
			'subtitle' => esc_html( 'Please select the footer layout.', 'ttm-business' ),
			'options'  => array(
				'6-6'     => array(
					'alt' => esc_html( 'Footer column 6 - 6', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/layout-6-6.jpg' ),
				),
				'8-4'     => array(
					'alt' => esc_html( 'Footer column 8 - 4', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/layout-8-4.jpg' ),
				),
				'4-8'     => array(
					'alt' => esc_html( 'Footer column 4 - 8', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/layout-4-8.jpg' ),
				),
				'4-4-4'   => array(
					'alt' => esc_html( 'Footer column 4 - 4 - 4', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/layout-4-4-4.jpg' ),
				),
				'3-3-3-3' => array(
					'alt' => esc_html( 'Footer column 3 - 3 - 3 - 3', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/layout-3-3-3-3.jpg' ),
				),	
				'6-3-3'   => array(
					'alt' => esc_html( 'Footer column 6 - 3 - 3', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/layout-4-4-4.jpg' ),
				),
				'5-4-3'   => array(
					'alt' => esc_html( 'Footer column 5 - 4 - 3', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/layout-4-4-4.jpg' ),
				),
				
			),
			'default'  => '3-3-3-3',
		),
		array(
			'id'       => 'footer-widget-border',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show Border Between Widgetbox', 'ttm-business' ),
			'default'  => 0,
			'subtitle' => esc_html__( 'Show Border Between Widgetbox', 'ttm-business' ),
			'on'       => esc_html__( 'On', 'ttm-business' ),
			'off'      => esc_html__( 'Off', 'ttm-business' ),
		),
		array(
			'id' => 'footerwidget_heading_color',
			'type' => 'color',
			'transparent' => false,
			'title' => esc_html__('Footer Heading Color', 'ttm-business'),
			'default' => '#ffffff',
			'validate' => 'color'
		),
		array(
			'id' => 'footerwidget_text_color',
			'type' => 'color',
			'transparent' => false,
			'title' => esc_html__('Footer Text Color', 'ttm-business'),
			'default' => '#ffffff',
			'validate' => 'color'
		),
		array(
			'id' => 'footerwidget_link_color',
			'type' => 'link_color',
			'transparent' => false,
			'title' => esc_html__('Footer Link Color', 'ttm-business'),
			'active' => false,
			'visited' => false,
		),
		array(
			'id'            => 'footer_background',
			'type'          => 'color',
			'title'         => esc_html__( 'Footer Background', 'ttm-business' ),
			'desc'          => esc_html__( 'Set footer background color.', 'ttm-business' ),
			 'output'    => array('background-color' => '.site-footer'),
		),
		array(
			'id'       => 'copyright_text_left',
			'type'     => 'editor',
			'title'    => esc_html__( 'Footer Text Left', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter the copyright left text', 'ttm-business' ),
			'default'  => 'Copyright © 2023 All Right Reserved | Powered by TTM Business WordPress Theme',
		),
		array(
			'id'       => 'copyright_text_right',
			'type'     => 'editor',
			'title'    => esc_html__( 'Footer Text Right', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter the copyright right Text', 'ttm-business' ),
		),
		array(
			'id'            => 'footer_copyright_background',
			'type'          => 'color',
			'title'         => esc_html__( 'Footer Copyright Background', 'ttm-business' ),
			'desc'          => esc_html__( 'Set footer background color for copyright area.', 'ttm-business' ),
			 'output'    => array('background-color' => '.site-footer'),
		),
		array(
			'id' => 'footer_text_color',
			'type' => 'color',
			'transparent' => false,
			'title' => esc_html__('Footer Copyright Text Color', 'ttm-business'),
			'default' => '#ffffff',
			'validate' => 'color'
		),
		array(
			'id'       => 'display-border-copyright',
			'type'     => 'switch',
			'title'    => esc_html__( 'Display Border Above Copyright', 'ttm-business' ),
			'default'  => 0,
			'subtitle' => esc_html__( 'Display Border Above Copyright', 'ttm-business' ),
			'on'       => esc_html__( 'On', 'ttm-business' ),
			'off'      => esc_html__( 'Off', 'ttm-business' ),
		),
	),
);

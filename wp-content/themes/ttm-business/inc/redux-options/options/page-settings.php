<?php
/**
 * Page Settings
 *
 * @since ttm-business 1.0
 */
return array(
	'title'  => esc_html( 'Page Settings', 'ttm-business' ),
	'id'     => 'page_settings',
	'icon'   => 'el el-file-edit',
	'fields' => array(
		array(
			'id'       => 'page_sidebar',
			'type'     => 'image_select',
			'title'    => esc_html( 'Page Sidebar', 'ttm-business' ),
			'subtitle' => esc_html( 'Select the page sidebar position.', 'ttm-business' ),
			'options'  => array(
				'full-width'    => array(
					'alt' => esc_html( 'Full Width', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/full-width.jpg' ),
				),
				'left-sidebar'  => array(
					'alt' => esc_html( 'Left Sidebar', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/left-sidebar.jpg' ),
				),
				'right-sidebar' => array(
					'alt' => esc_html( 'Right Sidebar', 'ttm-business' ),
					'img' => get_parent_theme_file_uri( 'inc/images/right-sidebar.jpg' ),
				),
			),
			'default'  => 'full-width',
		),
	),
);

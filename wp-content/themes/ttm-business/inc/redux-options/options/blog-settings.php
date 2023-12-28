<?php
/**
 * Header Settings
 *
 * @since ttm-business 1.0
 */
return array(
	'title'  => esc_html( 'Blog Settings', 'ttm-business' ),
	'id'     => 'blog_settings',
	'icon'   => 'el el-blogger',
	'fields' => array(
		array(
			'id'       => 'blog_sidebar',
			'type'     => 'image_select',
			'title'    => esc_html( 'Blog Sidebar', 'ttm-business' ),
			'subtitle' => esc_html( 'Select the blog sidebar position.', 'ttm-business' ),
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
			'default'  => 'right-sidebar',
		),
	),
);

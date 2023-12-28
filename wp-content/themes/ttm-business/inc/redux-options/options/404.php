<?php
/**
 * Color Scheme
 *
 * @since ttm-business 1.0
 */
return array(
	'title'            => esc_html__( '404 Page', 'ttm-business' ),
	'id'               => '404_page',
	'customizer_width' => '400px',
	'icon'             => 'el el-warning-sign',
	'fields'           => array(
		array(
			'id'      => '404_page_title',
			'type'    => 'text',
			'title'   => esc_html__( 'Page Title', 'ttm-business' ),
			'desc'    => esc_html__( 'Enter 404 page title.', 'ttm-business' ),
			'default' => esc_html__( '404', 'ttm-business' ),
		),
		array(
			'id'       => '404_page_description',
			'type'     => 'textarea',
			'title'    => esc_html__( '404 Page Description', 'ttm-business' ),
			'desc'     => esc_html__( 'Enter 404 page description.', 'ttm-business' ),
			'validate' => 'html_custom',
			'default'  => 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
		),
	),
);

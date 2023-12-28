<?php
/**
 * Socil info Settings
 *
 * @since ttm-business 1.0
 */
return array(
	'title'            => esc_html__( 'Contact Information', 'ttm-business' ),
	'id'               => 'site_info',
	'icon'             => 'el el-envelope',
	'fields'           => array(
		array(
			'id'       => 'social_infos',
			'type'     => 'select',
			'options'  => array(
				'facebook'  => esc_html__( 'Facebook', 'ttm-business' ),
				'twitter'   => esc_html__( 'Twitter', 'ttm-business' ),
				'dribbble'  => esc_html__( 'Dribbble', 'ttm-business' ),
				'vimeo'     => esc_html__( 'Vimeo', 'ttm-business' ),
				'pinterest' => esc_html__( 'Pinterest', 'ttm-business' ),
				'linkedin'  => esc_html__( 'LinkedIn', 'ttm-business' ),
				'youtube'   => esc_html__( 'Youtube', 'ttm-business' ),
				'instagram' => esc_html__( 'Instagram', 'ttm-business' ),
			),
			'multi'    => true,
			'sortable' => true,
			'title'    => esc_html__( 'Social info to display.', 'ttm-business' ),
			'subtitle' => esc_html__( 'Arrange the fields you wanted to display.', 'ttm-business' ),
		),
		array(
			'id'       => 'facebook_link',
			'type'     => 'text',
			'title'    => esc_html__( 'Facebook Url', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter facebook url.', 'ttm-business' ),
		),
		array(
			'id'       => 'twitter_link',
			'type'     => 'text',
			'title'    => esc_html__( 'Twitter Url', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter twitter url.', 'ttm-business' ),
		),
		array(
			'id'       => 'dribbble_link',
			'type'     => 'text',
			'title'    => esc_html__( 'Dribbble Url', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter dribbble url.', 'ttm-business' ),
		),
		array(
			'id'       => 'vimeo_link',
			'type'     => 'text',
			'title'    => esc_html__( 'Vimeo Url', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter vimeo url.', 'ttm-business' ),
		),
		array(
			'id'       => 'pinterest_link',
			'type'     => 'text',
			'title'    => esc_html__( 'Pinterest Url', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter pinterest url.', 'ttm-business' ),
		),
		array(
			'id'       => 'linkedin_link',
			'type'     => 'text',
			'title'    => esc_html__( 'LinkedIn Url', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter linkedin url.', 'ttm-business' ),
		),
		array(
			'id'       => 'youtube_link',
			'type'     => 'text',
			'title'    => esc_html__( 'Youtube Url', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter youtube url.', 'ttm-business' ),
		),
		array(
			'id'       => 'instagram_link',
			'type'     => 'text',
			'title'    => esc_html__( 'Instagram Url', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter instagram url.', 'ttm-business' ),
		),
		array(
			'id'       => 'pinterest_link',
			'type'     => 'text',
			'title'    => esc_html__( 'Pinterest Url', 'ttm-business' ),
			'subtitle' => esc_html__( 'Enter pinterest url.', 'ttm-business' ),
		),
	),
);

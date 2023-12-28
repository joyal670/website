<?php
/**
*ReduxFramework Sample Config File
*For full documentation, please visit: https://docs.reduxframework.com
**/

if ( ! class_exists( 'Redux' ) ) {
	return;
}

global $ttm_business_globals;

$opt_name = $ttm_business_globals['theme_options_name'];
$opt_name = apply_filters( 'redux_demo/opt_name', $opt_name ); // phpcs:ignore 

$theme = wp_get_theme();

$args = array(
	'opt_name'             => $opt_name,
	'display_name'         => $theme->get( 'Name' ),
	'display_version'      => $theme->get( 'Version' ),
	'menu_type'            => 'menu',
	'allow_sub_menu'       => false,
	'menu_title'           => esc_html__( 'Theme Options', 'ttm-business' ),
	'page_title'           => esc_html__( 'Theme Options', 'ttm-business' ),
	'async_typography'     => true,
	'admin_bar'            => false,
	'global_variable'      => $ttm_business_globals['theme_options_name'],
	'page_priority'        => 60,
	'dev_mode'             => false,
	'customizer'           => false,
	'page_parent'          => 'themes.php',
	'page_permissions'     => 'manage_options',
	'output' 			   => true,
    'output_tag'		   => true,
	'menu_icon'            => '',
	'page_icon'            => 'icon-themes',
	'page_slug'            => $ttm_business_globals['theme_options_slug'],
	'save_defaults'        => true,
	'default_show'         => false,
	'default_mark'         => '',
	'show_import_export'   => true,
    'transient_time' => '3600',
	'hints' => array(
                    'icon' => 'el-icon-question-sign',
                    'icon_position' => 'right',
                    'icon_size' => 'normal',
                    'tip_style' => array(
                        'color' => 'light'
                    ),
                    'tip_position' => array(
                        'my' => 'top left',
                        'at' => 'bottom right'
                    ),
                    'tip_effect' => array(
                        'show' => array(
                            'duration' => '500',
                            'event' => 'mouseover'
                        ),
                        'hide' => array(
                            'duration' => '500',
                            'event' => 'mouseleave unfocus'
                        )
                    )
                ),
	'output' => '1',
	'output_tag' => '1',
);

Redux::setArgs( $opt_name, $args );

$options_files = array(
	get_template_directory() . '/inc/redux-options/options/color-scheme-settings.php',
	get_template_directory() . '/inc/redux-options/options/header-settings.php',
	get_template_directory() . '/inc/redux-options/options/contact-info.php',
	get_template_directory() . '/inc/redux-options/options/page-title-settings.php',
	get_template_directory() . '/inc/redux-options/options/blog-settings.php',
	get_template_directory() . '/inc/redux-options/options/page-settings.php',
	get_template_directory() . '/inc/redux-options/options/typography-settings.php',
	get_template_directory() . '/inc/redux-options/options/footer-settings.php',
	get_template_directory() . '/inc/redux-options/options/404.php',
);

$options_files = apply_filters( 'ttm_business_redux_option_files', $options_files );

foreach ( $options_files as $option_file ) {
	if ( file_exists( $option_file ) ) {
		$option_data = include( $option_file );
		if ( $option_data && is_array( $option_data ) ) {
			Redux::setSection( $ttm_business_globals['theme_options_name'], $option_data );
		}
	}
}

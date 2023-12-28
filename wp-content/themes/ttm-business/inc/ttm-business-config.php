<?php

/**
 * Display one click options for TTM Business Theme.
 *
 * @package TTM Business
 */
if ( ! function_exists( 'ocdi_import_files' ) ) {
  function ocdi_import_files() {
    return array(
      array(
        'import_file_name'             => 'Main-Demo',
        'categories'                   => array( 'Main Demo' ),
        'import_file_url'            => 'https://themetechmount.com/ttm-business/demodata/demo1.xml',
		'import_widget_file_url'     => 'https://themetechmount.com/ttm-business/demodata/widgets-demo1.wie',
		'local_import_redux'           => array(
          array(
            'file_path'   => get_template_directory() . '/inc/demo-content/theme-options.json',
            'option_name' => 'ttm_business_options',
          ),
        ),
		'import_preview_image_url'     => 'https://themetechmount.com/ttm-business/demodata/layout-demo1.jpg',
		 'preview_url'                  => 'https://themetechmount.com/ttm-business/free/demo1/',
      ),
      array(
        'import_file_name'             => 'Web-Design',
        'categories'                   => array( 'Web Design' ),
        'import_file_url'            => 'https://themetechmount.com/ttm-business/demodata/demo2.xml',
		'import_widget_file_url'     => 'https://themetechmount.com/ttm-business/demodata/widgets-demo2.wie',
		'local_import_redux'           => array(
          array(
            'file_path'   => get_template_directory() . '/inc/demo-content/theme-options2.json',
            'option_name' => 'ttm_business_options',
          ),
        ),
		'import_preview_image_url'     => 'https://themetechmount.com/ttm-business/demodata/layout-demo2.jpg',
		 'preview_url'                  => 'https://themetechmount.com/ttm-business/free/demo2/',
      ),
	  array(
        'import_file_name'             => 'Web-Agency',
        'categories'                   => array( 'Web Agency' ),
        'import_file_url'            =>'https://themetechmount.com/ttm-business/demodata/demo3.xml',
		'import_widget_file_url'     => 'https://themetechmount.com/ttm-business/demodata/widgets-demo3.wie',
		'local_import_redux'           => array(
          array(
            'file_path'   => get_template_directory() . '/inc/demo-content/theme-options3.json',
            'option_name' => 'ttm_business_options',
          ),
        ),
		'import_preview_image_url'     => 'https://themetechmount.com/ttm-business/demodata/layout-demo3.jpg',
		 'preview_url'                  => 'https://themetechmount.com/ttm-business/free/demo3/',
      ),
	  array(
        'import_file_name'             => 'Business-Consulting',
        'categories'                   => array( 'Business Consulting' ),
        'import_file_url'            =>'https://themetechmount.com/ttm-business/demodata/demo4.xml',
		'import_widget_file_url'     => 'https://themetechmount.com/ttm-business/demodata/widgets-demo4.wie',
		'local_import_redux'           => array(
          array(
            'file_path'   => get_template_directory() . '/inc/demo-content/theme-options4.json',
            'option_name' => 'ttm_business_options',
          ),
        ),
		'import_preview_image_url'     => 'https://themetechmount.com/ttm-business/demodata/layout-demo4.jpg',
		 'preview_url'                 => 'https://themetechmount.com/ttm-business/free/demo5/',
      ),
	  array(
        'import_file_name'             => 'Parallax-Business',
        'categories'                   => array( 'Parallax Business' ),
        'import_file_url'            =>'https://themetechmount.com/ttm-business/demodata/demo5.xml',
		'import_widget_file_url'     => 'https://themetechmount.com/ttm-business/demodata/widgets-demo5.wie',
		'local_import_redux'           => array(
          array(
            'file_path'   => get_template_directory() . '/inc/demo-content/theme-options5.json',
            'option_name' => 'ttm_business_options',
          ),
        ),
		'import_preview_image_url'     => 'https://themetechmount.com/ttm-business/demodata/layout-demo5.jpg',
		 'preview_url'                 => 'https://themetechmount.com/ttm-business/free/demo15/',
      ),
	  array(
        'import_file_name'             => 'Marketing-Agency',
        'categories'                   => array( 'Marketing Agency' ),
        'import_file_url'            =>'https://themetechmount.com/ttm-business/demodata/demo6.xml',
		'import_widget_file_url'     => 'https://themetechmount.com/ttm-business/demodata/widgets-demo6.wie',
		'local_import_redux'           => array(
          array(
            'file_path'   => get_template_directory() . '/inc/demo-content/theme-options6.json',
            'option_name' => 'ttm_business_options',
          ),
        ),
		'import_preview_image_url'     => 'https://themetechmount.com/ttm-business/demodata/layout-demo6.jpg',
		 'preview_url'                 => 'https://themetechmount.com/ttm-business/free/demo19/',
      ),
	  array(
        'import_file_name'             => 'Modern-Agency ',
        'categories'                   => array( 'Modern Agency' ),
        'import_file_url'            =>'https://themetechmount.com/ttm-business/demodata/demo7.xml',
		'import_widget_file_url'     => 'https://themetechmount.com/ttm-business/demodata/widgets-demo7.wie',
		'local_import_redux'           => array(
          array(
            'file_path'   => get_template_directory() . '/inc/demo-content/theme-options7.json',
            'option_name' => 'ttm_business_options',
          ),
        ),
		'import_preview_image_url'     => 'https://themetechmount.com/ttm-business/demodata/layout-demo7.jpg',
		 'preview_url'                 => 'https://themetechmount.com/ttm-business/free/demo28/',
      ),
    );
  }
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );


function ocdi_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$footer_menu = get_term_by( 'name', 'Footer menu', 'nav_menu' );
	set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $main_menu->term_id,
			'footer-menu' => $footer_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );

// Disable generation of smaller images (thumbnails) during the content import
add_filter( 'ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

// Disable the branding notice
add_filter( 'ocdi/disable_pt_branding', '__return_true' );

function ocdi_plugin_intro_text( $default_text ) {
    $default_text .= '<div class="ttm-premium-upgrade"><h1 class="banner-header">Get access to all 30+ premium demos and more.</h1><h2 class="banner-subheader">Take the lead. Experience website building with no limits</h2><a href="https://themetechmount.com/ttm-business/" target="_blank" class="banner-button" role="button"><span>View Premium Demos</span></a><a href="https://themetechmount.com/ttm-business/pricing-plan/" target="_blank" class="banner-button" role="button"><span>Upgrade now</span></a></div>';
 
    return $default_text;
}
add_filter( 'ocdi/plugin_intro_text', 'ocdi_plugin_intro_text' );


?>
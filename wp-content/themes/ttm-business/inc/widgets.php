<?php
/**
 * TTM Business Sidebars
 *
 * @since ttm-business 1.0
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ttm_business_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar Widget Area', 'ttm-business' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'This is sidebar for blog.', 'ttm-business' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Page Sidebar Widget Area', 'ttm-business' ),
			'id'            => 'page-sidebar',
			'description'   => esc_html__( 'This is sidebar for pages.', 'ttm-business' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	if ( class_exists( 'Redux' ) ) {
		// Footer sidebars.
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer - 1st Widget Area ', 'ttm-business' ),
				'id'            => 'footer-column-1',
				'description'   => esc_html__( 'This is first footer widget area for footer.', 'ttm-business' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
		
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer - 2nd Widget Area', 'ttm-business' ),
				'id'            => 'footer-column-2',
				'description'   => esc_html__( 'This is second footer widget area for footer.', 'ttm-business' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
		
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer - 3rd Widget Area', 'ttm-business' ),
				'id'            => 'footer-column-3',
				'description'   => esc_html__( 'This is third footer widget area for footer.', 'ttm-business' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			) 
		);
		
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer - 4th Widget Area', 'ttm-business' ),
				'id'            => 'footer-column-4',
				'description'   => esc_html__( 'This is fourth footer widget area for footer.', 'ttm-business' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}
add_action( 'widgets_init', 'ttm_business_widgets_init' );

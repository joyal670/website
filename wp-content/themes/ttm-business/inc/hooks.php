<?php
/**
 * Display action functions for TTM Business Theme.
 *
 * @since ttm-business 1.0
 */
 
 
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ttm_business_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'ttm_business_pingback_header' );


/*
 * Add some special classes on <body> tag.
 */
if( !function_exists('ttm_business_body_classes') ){
function ttm_business_body_classes($bodyClass){

	global $ttm_business_options;
		
	if ( ! is_singular() ) {
		$bodyClass[] = 'hfeed';
	}
		$sidebar_position = 'right-sidebar';
		$current_sidebar  = ( function_exists( 'ttm_business_get_current_sidebar' ) ) ? ttm_business_get_current_sidebar() : '';
		
		if ( is_active_sidebar( $current_sidebar ) ) {
			if ( is_page() ) {
				$sidebar_position = ( isset( $ttm_business_options['page_sidebar'] ) && $ttm_business_options['page_sidebar'] ) ? $ttm_business_options['page_sidebar'] : $sidebar_position;
			} elseif ( is_search() ) {
				$sidebar_position = 'right-sidebar';
			} elseif ( is_home() || is_archive() || is_singular( 'post' ) ) {
				$sidebar_position = ( isset( $ttm_business_options['blog_sidebar'] ) && $ttm_business_options['blog_sidebar'] ) ? $ttm_business_options['blog_sidebar'] : $sidebar_position;
			}

			if ( 'left-sidebar' === $sidebar_position ) {
				$bodyClass[] = 'page-sidebar-yes';
			} else if ('right-sidebar' === $sidebar_position) {
				$bodyClass[] = 'page-sidebar-yes';
			} else {
				$bodyClass[] = 'page-sidebar-no';
			}
		}
		
		if (isset($ttm_business_options['header-layout']) && $ttm_business_options['header-layout']) {
			$bodyClass[] = 'tm-header-' . $ttm_business_options['header-layout'] . '';
		}
		
		
	return $bodyClass;
}
}
add_filter('body_class', 'ttm_business_body_classes');


if ( ! function_exists( 'ttm_business_get_current_sidebar' ) ) {
	/**
	 * Get the current sidebar.
	 */
	function ttm_business_get_current_sidebar() {

		$sidebar_position = ttm_business_sidebar_position();
		if ( 'full-width' === $sidebar_position ) {
			return false;
		}

		if ( is_page() ) {
			$current_sidebar = 'page-sidebar';
		} elseif ( is_search() ) {
			$current_sidebar = 'sidebar-1';
		} elseif ( is_singular( 'service' ) ) {
			$current_sidebar = 'service-sidebar';
		} elseif ( is_home() || is_archive() || is_singular( 'post' ) ) {
			$current_sidebar = 'sidebar-1';
		} else {
			$current_sidebar = 'sidebar-1';
		}

		return $current_sidebar;
	}
}

if ( ! function_exists( 'ttm_business_sidebar_position' ) ) {
	/**
	 * Get the current sidebar position.
	 */
	function ttm_business_sidebar_position() {
		global $ttm_business_options;
		
		$sidebar_position = 'right-sidebar';
		
		if ( is_page() ) {
			$sidebar_position = ( isset( $ttm_business_options['page_sidebar'] ) && $ttm_business_options['page_sidebar'] ) ? $ttm_business_options['page_sidebar'] : $sidebar_position;
		} elseif ( is_search() ) {
			$sidebar_position = 'right-sidebar';
		}  elseif ( is_home() || is_archive() || is_singular( 'post' ) ) {
			$sidebar_position = ( isset( $ttm_business_options['blog_sidebar'] ) && $ttm_business_options['blog_sidebar'] ) ? $ttm_business_options['blog_sidebar'] : $sidebar_position;
		}

		return $sidebar_position;
	}
}


function ttm_business_add_inline_dynamic_css() {
	$ttm_business_options = get_option( 'ttm_business_options' );
	ob_start();
	include get_template_directory().'/css/dynamic-styles.php';
	$css    = ob_get_clean();
	
	wp_add_inline_style( 'ttm-business-main-style', $css );		
}

add_action( 'wp_enqueue_scripts', 'ttm_business_add_inline_dynamic_css', 15 );


if ( ! function_exists( 'ttm_business_register_page_metafields' ) ) {
	function ttm_business_register_page_metafields() {
		add_meta_box( 'ttm-business_page_settings', __( 'Page Settings', 'ttm-business' ), 'ttm_business_page_settings_function', 'page' );
	}
}
add_action( 'add_meta_boxes', 'ttm_business_register_page_metafields' );

if ( ! function_exists( 'ttm_business_page_settings_function' ) ) {
	function ttm_business_page_settings_function( $post ) {
		global $post;

		wp_nonce_field( basename( __FILE__ ), 'ttm-business-page-meta-nonce' );
		
		$page_settings         = get_post_meta( $post->ID, 'ttm-business_page_settings', true );
		$prt_page_title_disable = isset( $page_settings['prt_page_title_disable'] ) ? (bool) $page_settings['prt_page_title_disable'] : '';
		?>
		<div class="prt-meta-content">
			<div class="prt-page-input-field">
				<label for="prt_page_title_disable"><?php esc_html_e( 'Disable Page Title', 'ttm-business' ); ?></label>
				<input type="checkbox" id="prt_page_title_disable" name="prt_page_title_disable" value="true" <?php checked( $prt_page_title_disable, true ); ?>>
			</div>
		</div>
		<?php
	}
}


if ( ! function_exists( 'ttm_business_page_save_meta_box' ) ) {
	function ttm_business_page_save_meta_box( $post_id ) {

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_posts' ) ) {
			return;
		}

		if ( ! isset( $_POST['ttm-business-page-meta-nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( 	$_POST['ttm-business-page-meta-nonce'] ) ), basename( __FILE__ ) ) ) {
			return;
		}

		$page_settings = array();
		$page_settings['prt_page_title_disable'] = isset( $_POST['prt_page_title_disable'] ) ? sanitize_text_field( wp_unslash( $_POST['prt_page_title_disable'] ) ) : '';

		update_post_meta( $post_id, 'ttm-business_page_settings', $page_settings );
	}
}
add_action( 'save_post', 'ttm_business_page_save_meta_box' );

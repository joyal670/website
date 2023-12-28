<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @since ttm-business 1.0
 */

get_header();

global $ttm_business_options;

if ( isset( $ttm_business_options['404_page_title'] ) && $ttm_business_options['404_page_title'] ) {
	$pnf_page_title = $ttm_business_options['404_page_title'];
} else {
	$pnf_page_title = esc_html__( '404', 'ttm-business' );
}

if ( isset( $ttm_business_options['404_page_description'] ) && $ttm_business_options['404_page_description'] ) {
	$pnf_page_description = $ttm_business_options['404_page_description'];
} else {
	$pnf_page_description = esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ttm-business' );
}
?>
<div class="404-page-container">
	<div class="container">
		<div class="row site-content-inner">
			<div id="primary" class="content-area col-lg-12">
				<main id="main" class="site-main">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php echo esc_html( $pnf_page_title ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php echo esc_html( $pnf_page_description ); ?></p>
							<?php
							get_search_form();
								?>
								<a href="<?php echo esc_url( get_home_url(), 'ttm-business' ); ?>" class="prt-back-buttton" role="button"><?php esc_html_e( 'Back to Home', 'ttm-business' ); ?></a>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</main><!-- .site-main -->
			</div><!-- .content-area -->	
		</div>
	</div>
</div>
<?php
get_footer();

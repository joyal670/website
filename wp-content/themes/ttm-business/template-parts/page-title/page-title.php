<?php 
global $ttm_business_options, $post;

if ( is_404() ) {
	return;
}

if ( is_home() ) {
	$current_id = get_option( 'page_for_posts' );
} else {
	$current_id = isset( $post->ID ) ? $post->ID : '';
}

if ( $current_id ) {
	$page_settings         = get_post_meta( $current_id, 'ttm-business_page_settings', true );
	$prt_page_title_disable = isset( $page_settings['prt_page_title_disable'] ) ? (bool) $page_settings['prt_page_title_disable'] : '';

	if ( $prt_page_title_disable ) {
		return;
	}
}
?>
<div class="ttm-business-page-title d-flex align-items-center">
	<div class="ttm-business-page-title-layer"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">			
				<h1 class="page-title">
					<?php 
					if ( is_archive() ) {
						the_archive_title();
					} elseif ( is_search() ) {
						printf( esc_html__( 'Search Results for: %s', 'ttm-business' ), '<span>' . get_search_query() . '</span>' );
					} elseif( is_home() ){
						printf( esc_html__( 'Blog', 'ttm-business' ));
					}
					else {
						echo esc_html( get_the_title( $current_id ) );
					}
					?>
				</h1>
			</div>				
		</div>
	</div>
</div>

<?php
global $ttm_business_options;
$tm_menuclass = '';
if($ttm_business_options['headers-layout'] == 'fullwide') {
	$header_layout_class =	'container-fullwide';
}
else {
	$header_layout_class =	'container';
}
$display_search_icon = isset( $ttm_business_options['display-search-icon'] ) ? $ttm_business_options['display-search-icon'] : '';
$social_infos = isset( $ttm_business_options['social_infos'] ) ? $ttm_business_options['social_infos'] : '';
$headerbox_cta_text = isset( $ttm_business_options['headerbox_cta_text'] ) ? $ttm_business_options['headerbox_cta_text'] : '';


 if (( $social_infos !='' ) || ($display_search_icon != '0') || ( $headerbox_cta_text !='' )) {
	 $tm_menuclass="tm-has-textarea";
}

?>

<div class="site-header">
	<div class="<?php echo esc_attr( $header_layout_class ); ?> site-header-top">
		<div class="d-flex align-items-center <?php echo esc_attr( $tm_menuclass ); ?>">
			<?php
			// Site logo 
			get_template_part( 'template-parts/header/elements/logo2' );
			?>
			<nav id="site-navigation" class="main-navigation">
				<?php
				if ( has_nav_menu( 'main-menu' ) ) :
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'menu_id'        => 'primary-menu',
					)
				);
				endif;
				?>
			</nav>
			<?php if (( $social_infos !='' ) || ($display_search_icon != '0') || ( $headerbox_cta_text !='' )) { ?>
			<div class="header-right-side">
			<?php
			// cart
			get_template_part( 'template-parts/header/elements/search' );
			
			get_template_part( 'template-parts/header/elements/social-info' );
			
			get_template_part( 'template-parts/header/elements/cta-info' );
			?>
			</div>
			<?php } ?>
			<div id="site-navigation-mobile">
			</div>
		</div>
	</div>
</div>

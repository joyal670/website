<?php
global $ttm_business_options;

$header_layout = ( isset( $ttm_business_options['header-layout'] ) && $ttm_business_options['header-layout'] ) ? $ttm_business_options['header-layout'] : 'layout-1';

$header_class  = 'site-header-container';
$header_class .= ' header-' . $header_layout;
 if (isset($ttm_business_options['header-menu-position']) && $ttm_business_options['header-menu-position']) {
	$menu_postion = $ttm_business_options['header-menu-position']; 
 }
 else {
	$menu_postion = 'right'; 
 }


if ( ! class_exists( 'Redux' ) ) {
	$header_class .= ' redux-disabled';
}
?>
<header id="masthead" class="<?php echo esc_attr( $header_class ); ?> prt-header-menu-position-<?php echo esc_attr( $menu_postion ); ?>">
	<?php get_template_part( 'template-parts/header/layouts/' . $header_layout ); ?>
</header>


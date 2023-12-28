<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="//gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}
?>

<div class="main-holder">
	<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ttm-business' ); ?></a>
	<?php get_template_part( 'template-parts/header/header' ); ?>
	<div id="content" class="site-content">
	<?php get_template_part( 'template-parts/page-title/page', 'title' ); ?>
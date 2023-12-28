<?php
/**
 * Template part for displaying header logo
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package TTM Business
 */
 
global $ttm_business_options;
$logo_url = $logo_text = '';

if ( isset( $ttm_business_options['logotype'] ) && class_exists( 'Redux' ) ) {
	$logotype = $ttm_business_options['logotype'];
	
	if( $logotype=='image' && !empty($ttm_business_options['site-logo']['url']) ){
		$logo_url = $ttm_business_options['site-logo']['url'];
	}
	else {
		$logo_text = $ttm_business_options['logotext'];
	}
}



?>
<div class="site-logo">

<?php if( class_exists( 'Redux' ) ){ ?>

<?php 	if ( $logo_url !== '' && $logotype =='image') {  ?>
	<a href="<?php echo esc_url( get_home_url() ); ?>" rel="home">
		<img class="img-fluid" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
	</a>
	<?php
	}
 else { 	
?>
	<span class="site-title-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $logo_text; ?></a></span>
<?php } } 

		if ( ! class_exists( 'Redux' ) ) {
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
		}
		$ttm_business_site_description = get_bloginfo( 'description', 'display' );
			if ( $ttm_business_site_description || is_customize_preview() ) :
				?>
			<p class="site-description"><?php echo esc_html($ttm_business_site_description); ?></p>
			<?php endif; ?>		
	
</div>

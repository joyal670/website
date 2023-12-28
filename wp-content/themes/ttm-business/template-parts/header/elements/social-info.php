<?php
global $ttm_business_options;

$social_infos = isset( $ttm_business_options['social_infos'] ) ? $ttm_business_options['social_infos'] : '';

if ( ! $social_infos ) {
	return;
}
?>
<div class="social-info-wrapper">
	<ul class="social-info">
	<?php
	foreach ( $social_infos as $social_info ) {
		if ( isset( $ttm_business_options[ $social_info . '_link' ] ) && $ttm_business_options[ $social_info . '_link' ] ) {
			?>
			<li class="social-facebook">
				<a class="social-icon" target="_blank" href="#" rel="nofollow"><i class="fab fa-<?php echo esc_attr( $social_info ); ?>"></i></a>
			</li>
			<?php
		}
	}
	?>
	</ul>
</div>


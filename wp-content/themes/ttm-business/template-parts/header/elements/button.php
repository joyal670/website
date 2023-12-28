<?php
global $ttm_business_options;

$header_button_title = isset( $ttm_business_options['header_button_title'] ) ? $ttm_business_options['header_button_title'] : '';
$header_button_liink = isset( $ttm_business_options['header_button_liink'] ) ? $ttm_business_options['header_button_liink'] : '';
if ( ! $header_button_title || ! $header_button_liink ) {
	return;
}
?>
<div class="ttm-business-header-button-container">
	<div class="ttm-business-header-button">
		<a class="ttm-business-header-button" href="<?php echo esc_url( $header_button_liink ); ?>" title="<?php echo esc_attr( $header_button_title ); ?>"><?php echo esc_html( $header_button_title ); ?></a>
	</div>
</div>

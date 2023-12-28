<?php
global $ttm_business_options;

$headerbox_cta_text = isset( $ttm_business_options['headerbox_cta_text'] ) ? $ttm_business_options['headerbox_cta_text'] : '';
if(!empty($headerbox_cta_text)) {
?>
<div class="ttm-header-cta">
<div class="ttm-header-cta-inner">
	<?php echo wp_kses_post( $headerbox_cta_text ); ?>
</div>
</div>
<?php } ?>
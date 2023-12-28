<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @since ttm-business 1.0
 */

global $ttm_business_options;

$footer_col = array( 'col-xl-12 col-lg-12 col-md-12 col-sm-12' );

/**
 * Filters footer widget columns.
 *
 * @param string $widget_column Name of widget column option.
 *
 * @visible true
 */
$footer_layout = isset( $ttm_business_options['footer_layout'] ) ? $ttm_business_options['footer_layout'] : '';
if ( $footer_layout ) {
	if ( '6-6' === $footer_layout ) {
		$footer_col = array( 'col-xl-6 col-lg-6 col-md-6 col-sm-12', 'col-xl-6 col-lg-6 col-md-6 col-sm-12' );
	} elseif ( '8-4' === $footer_layout ) {
		$footer_col = array( 'col-xl-8 col-lg-8 col-md-6 col-sm-12', 'col-xl-4 col-lg-4 col-md-6 col-sm-12' );
	} elseif ( '4-8' === $footer_layout ) {
		$footer_col = array( 'col-xl-4 col-lg-4 col-md-6 col-sm-12', 'col-xl-8 col-lg-8 col-md-6 col-sm-12' );
	} elseif ( '4-4-4' === $footer_layout ) {
		$footer_col = array( 'col-xl-4 col-lg-4 col-md-6 col-sm-12', 'col-xl-4 col-lg-4 col-md-6 col-sm-12', 'col-xl-4 col-lg-4 col-md-6 col-sm-12' );
	} elseif ( '3-3-3-3' === $footer_layout ) {
		$footer_col = array( 'col-xl-3 col-lg-3 col-md-6 col-sm-12', 'col-xl-3 col-lg-3 col-md-6 col-sm-12', 'col-xl-3 col-lg-3 col-md-6 col-sm-12', 'col-xl-3 col-lg-3 col-md-6 col-sm-12' );
	} elseif ( '6-3-3' === $footer_layout ) {
		$footer_col = array( 'col-xl-6 col-lg-6 col-md-4 col-sm-12', 'col-xl-3 col-lg-3 col-md-4 col-sm-12', 'col-xl-3 col-lg-3 col-md-4 col-sm-12' );
	} elseif ( '5-4-3' === $footer_layout ) {
		$footer_col = array( 'col-xl-5 col-lg-5 col-md-4 col-sm-12', 'col-xl-4 col-lg-4 col-md-4 col-sm-12', 'col-xl-3 col-lg-3 col-md-4 col-sm-12' );
	} elseif ( '3-3-6' === $footer_layout ) {
		$footer_col = array( 'col-xl-3 col-lg-3 col-md-4 col-sm-12', 'col-xl-3 col-lg-3 col-md-4 col-sm-12', 'col-xl-6 col-lg-6 col-md-4 col-sm-12' );
	} elseif ( '8-2-2' === $footer_layout ) {
		$footer_col = array( 'col-xl-8 col-lg-6 col-md-4 col-sm-12', 'col-xl-2 col-lg-3 col-md-4 col-sm-12', 'col-xl-2 col-lg-3 col-md-4 col-sm-12' );
	} elseif ( '2-2-8' === $footer_layout ) {
		$footer_col = array( 'col-xl-2 col-lg-3 col-md-4 col-sm-12', 'col-xl-2 col-lg-3 col-md-4 col-sm-12', 'col-xl-8 col-lg-6 col-md-4 col-sm-12' );
	} elseif ( '6-2-2-2' === $footer_layout ) {
		$footer_col = array( 'col-xl-6 col-lg-3 col-md-6 col-sm-12', 'col-xl-2 col-lg-3 col-md-6 col-sm-12', 'col-xl-2 col-lg-3 col-md-6 col-sm-12', 'col-xl-2 col-lg-3 col-md-6 col-sm-12' );
	} elseif ( '2-2-2-6' === $footer_layout ) {
		$footer_col = array( 'col-xl-2 col-lg-3 col-md-6 col-sm-12', 'col-xl-2 col-lg-3 col-md-6 col-sm-12', 'col-xl-2 col-lg-3 col-md-6 col-sm-12', 'col-xl-6 col-lg-3 col-md-6 col-sm-12' );
	} elseif ( '2-2-4-4' === $footer_layout ) {
		$footer_col = array( 'col-xl-2 col-lg-2 col-md-6 col-sm-12', 'col-xl-2 col-lg-2 col-md-6 col-sm-12', 'col-xl-4 col-lg-4 col-md-6 col-sm-12', 'col-xl-4 col-lg-4 col-md-6 col-sm-12' );
	}
}

$col_count      = 0;
$sidebar_active = false;
foreach ( $footer_col as $columns_class ) {
	$col_count++;
	if ( is_active_sidebar( 'footer-column-' . $col_count ) ) {
		$sidebar_active = true;
	}
}

if ( ! $sidebar_active ) {
	return;
}

$footer_widget_sep = isset( $ttm_business_options['footer-widget-border'] ) ? $ttm_business_options['footer-widget-border'] : '';
$tm_sepclass = '';
 if (($footer_widget_sep != '0')) {
	 $tm_sepclass="tm-widget-sep-on";
}

?>
<div class="ttm-business-footer-widgets-wrapper <?php echo esc_attr( $tm_sepclass ); ?>">
	<div class="container">
		<div class="ttm-business-footer row">
			<?php
			$col_count = 0;
			foreach ( $footer_col as $columns_class ) {
				$col_count++;
				?>
				<div class="widget-area <?php echo esc_attr( $columns_class ); ?>">
					<?php dynamic_sidebar( 'footer-column-' . $col_count ); ?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<?php

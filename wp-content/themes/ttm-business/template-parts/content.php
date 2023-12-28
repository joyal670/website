<?php
/**
 * The default template for displaying post content
 *
 * @since ttm-business 1.0
 */

global $ttm_business_options;
?>

<article <?php post_class(); ?>>
	<div class="ttm-business-blog-classic">
	<?php ttm_business_post_thumbnail(); ?>	
	<div class="ttm-business-blog-content">
		<header class="entry-header">
			<?php
			if ( !is_single() ) {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
			?>
			<?php ttm_business_entry_footer(); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			if ( is_single() ) {
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ttm-business' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) 
				);
			} else {
				the_excerpt();
			}
		
			 if ( !is_single() ) { echo ttm_business_readmore_button(); }
			?>
			<div class="clear clr"></div>		
			<?php
			// pagination if any
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_attr__( 'Pages:', 'ttm-business' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->	  
	</div>
	</div>
</article>

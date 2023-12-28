<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ttm-business
 */

get_header();
?>
<div class="container">
	<div class="row site-content-inner">
		<div id="primary" class="content-area <?php echo esc_attr( ttm_business_sidebar_class() ); ?>">
			<main id="main" class="site-main">
			<?php if ( have_posts() ) { ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;
				
			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
			?>
			</main><!-- #main -->
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();

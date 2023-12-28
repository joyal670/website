<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @since ttm-business 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row site-content-inner"> 
			<div id="primary" class="content-area <?php echo esc_attr( ttm_business_sidebar_class() ); ?>">
				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) {

					if ( is_home() && ! is_front_page() ) {
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					}

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;
					
					?>
					<div class="post-pagination">
						<?php the_posts_pagination(); ?>
					</div>
					<?php

				} else {
					get_template_part( 'template-parts/content', 'none' );
				}
				?>
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		<?php get_sidebar(); ?>
	</div>		
</div>
<?php get_footer(); ?>
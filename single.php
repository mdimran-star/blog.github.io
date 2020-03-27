<?php
/**
 * The template for displaying all single posts.
 *
 * @package portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area single-blog-post">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php portfolio_post_nav(); ?>

			<div class="grid grid-pad wow animated fadeIn">
            	<div class="col-1-1">
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>
            	</div><!-- col-1-1 -->
            </div><!-- grid --> 

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
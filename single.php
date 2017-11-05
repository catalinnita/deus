<?php
/**
 * The template for displaying all single posts
 *
 * @link http://wpfw.net/docs/deus/#single-post
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


	<main id="main" class="site-main" role="main">

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/post/content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			the_post_navigation( array(
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', TEMPLATE_DOMAIN ) . '</span><span class="nav-title"><span class="fa fa-angle-left"></span><span class="nav-text">%title</span></span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', TEMPLATE_DOMAIN ) . '</span><span class="nav-title"><span class="nav-text">%title</span><span class="fa fa-angle-right"></span></span>',
			) );

		endwhile; // End of the loop.
		?>

	</main>

<?php get_footer();

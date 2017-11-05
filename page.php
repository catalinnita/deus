<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link http://wpfw.net/docs/deus/#page
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/page/content', 'page' );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
				
			endif;

		endwhile;
		?>

	</main>

<?php get_footer();

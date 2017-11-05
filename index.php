<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://wpfw.net/docs/deus/#index
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Posts', TEMPLATE_DOMAIN ); ?></h2>
	</header>

	<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', TEMPLATE_DOMAIN ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', TEMPLATE_DOMAIN ) . '</span>',
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', TEMPLATE_DOMAIN ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;

		?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer();

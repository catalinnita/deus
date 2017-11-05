<?php
/**
 * The template for displaying search results pages
 *
 * @link http://wpfw.net/docs/deus/#search-results
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


	<header class="page-header">
		
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', TEMPLATE_DOMAIN ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', TEMPLATE_DOMAIN ); ?></h1>
		<?php endif; ?>

	</header>

	<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; 

			the_posts_pagination( array(
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', TEMPLATE_DOMAIN ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', TEMPLATE_DOMAIN ) . '</span>',
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', TEMPLATE_DOMAIN ) . ' </span>',
			) );

		else : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', TEMPLATE_DOMAIN ); ?></p>
			<?php
				get_search_form();

		endif;
		?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer();

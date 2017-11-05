<?php
/**
 * The template for displaying archive pages
 *
 * @link http://wpfw.net/docs/deus/#archive
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header>

	<?php endif; ?>

	<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
			<?php
			
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => '< <span class="screen-reader-text">' . __( 'Previous page', TEMPLATE_DOMAIN ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', TEMPLATE_DOMAIN ) . '</span> >',
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', TEMPLATE_DOMAIN ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer();

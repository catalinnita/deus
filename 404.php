<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link http://wpfw.net/docs/deus/#404
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<header class="page-header">
		<h1 class="page-title"><?php _e( "Oops! We've got tanggled", TEMPLATE_DOMAIN ); ?></h1>
	</header><!-- .page-header -->

	<main id="main" class="site-main" role="main">

		<div class="page-404">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', TEMPLATE_DOMAIN ); ?></p>
			<?php get_search_form(); ?>
		</div>

	</main>

<?php 
get_footer();

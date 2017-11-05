<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		the_title( '<h1 class="entry-title">', '</h1>' );
		
		if ( 'post' === get_post_type() ) {
		?>
			<div class="entry-date">
			<?php
				echo WPFW::post_date() . ' ' . WPFW::post_author();
			?>
			</div>
			<?php
		}
		?>
	</header>

	<div class="sharing">
		<div class="medium-title">Share</div>
		<ul>
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">LinkedIn</a></li>
			<li><a href="#">3 comments</a></li>
		</ul>
		
	</div>
	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->
	<?php get_sidebar(); ?>

	<?php
	WPFW::entry_footer();
	?>

</article><!-- #post-## -->

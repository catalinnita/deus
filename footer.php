<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link http://wpfw.net/docs/deus/#footer
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.0
 */

?>

		</div>
	</div>

	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="content-width">
			<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				get_template_part( 'template-parts/footer/footer', 'social' );
				get_template_part( 'template-parts/footer/footer', 'info' );

			?>
		</div>
	</footer>
	
</div>
<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link http://wpfw.net/docs/deus/#comments
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.0
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	
	if ( have_comments() ) : ?>
		<h4 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', TEMPLATE_DOMAIN ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						TEMPLATE_DOMAIN
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h4>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 100,
					'style'       => 'ol',
					'short_ping'  => true,
					'reply_text'  => __( 'Reply', TEMPLATE_DOMAIN ),
				) );
			?>
		</ol>

		<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', TEMPLATE_DOMAIN ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', TEMPLATE_DOMAIN ) . '</span>',
		) );

	endif;

	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php _e( 'Comments are closed.', TEMPLATE_DOMAIN ); ?></p>
	<?php
	endif;
	$args = array(
	  'id_form'           => 'commentform',
	  'class_form'        => 'comment-form',
	  'id_submit'         => 'submit',
	  'class_submit'      => 'button button-large button-ghost',
	  'name_submit'       => 'submit',
	  'title_reply'       => __( 'Leave a Reply' ),
	  'title_reply_to'    => __( 'Leave a Reply to %s' ),
	  'cancel_reply_link' => __( 'Cancel Reply' ),
	  'label_submit'      => __( 'Post Comment' ),
	  'format'            => 'xhtml',
	);
	comment_form($args);
	?>

</div>

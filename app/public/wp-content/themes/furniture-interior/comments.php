<?php
/**
 * The template for displaying Comments.
 *
 * @package Furniture Interior
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$furniture_interior_comments_number = get_comments_number();
				if ( 1 === $furniture_interior_comments_number ) {
					/* translators: %s: post title */
					printf (esc_html ('One thought on &ldquo;%s&rdquo;', 'furniture-interior'), esc_html(get_the_title()) );
				} else {
					printf(						
						esc_html(
							/* translators: 1: number of comments, 2: post title */
							_nx(
								'%1$s thought on &ldquo;%2$s&rdquo;',
								'%1$s thoughts on &ldquo;%2$s&rdquo;',
								$furniture_interior_comments_number,
								'comments title',
								'furniture-interior'
							)
						),
						esc_html(number_format_i18n( $furniture_interior_comments_number )),
						esc_html(get_the_title())
					);
				}
			?>
		</h2>
		<?php the_comments_navigation(); ?>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; // Check for have_comments(). ?>
	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'furniture-interior' ); ?></p>
	<?php endif; ?>
	<?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
			'title_reply' => esc_html(get_theme_mod('interior_designs_comment_title',__('Leave a Reply','furniture-interior' )) ),
			'label_submit' => esc_html(get_theme_mod('interior_designs_comment_submit_text',__('Post Comment','furniture-interior' )) ),
		) );
	?>
</div>
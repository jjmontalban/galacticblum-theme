<?php
  if ( post_password_required() ) {
    return;
  }
?>
<div id="comments" class="comments-area">

  <h2 class="comments-title">
		<?php _e( 'Replies', 'galacticblum' ); ?>
	</h2>

  <?php if ( have_comments() ): ?>

    <ol class="comment-list">
      <?php wp_list_comments( [ 'avatar_size' => 80 ] ); ?>
    </ol>

    <?php
    the_comments_pagination(
      [
        'prev_text' => __( 'Previous', 'galacticblum' ),
        'next_text' => __( 'Next', 'galacticblum' ),
      ]
    );
    ?>

  <?php endif; ?>

  <?php comment_form(); ?>
</div>

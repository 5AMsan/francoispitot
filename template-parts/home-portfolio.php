<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="text-center">
		<a href="<?php echo get_term_link('portraits', 'projects'); ?>"><?php the_post_thumbnail('medium'); ?></a>
	</div>
</article>

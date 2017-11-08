<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

global $is_active;
?>

<li class="<?php echo $is_active; ?> orbit-slide">
	<figure class="orbit-figure">
		<img class="orbit-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
		<figcaption class="orbit-caption"><?php the_content(); ?></figcaption>
	</figure>
</li>

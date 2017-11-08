<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width">
	<main class="main-content grid-x grid-margin-x">
		<div class="hoe-for-small-only medium-1 cell'"></div>
		<div class="small-12 medium-10 cell'">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', '' ); ?>
			<?php the_post_navigation(); ?>
			<?php comments_template(); ?>
		<?php endwhile;?>
		</div>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer();

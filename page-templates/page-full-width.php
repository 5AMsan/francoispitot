<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width">
	<main class="main-content grid-x grid-margin-x">
		<div class="hide-for-small-only medium-1 cell'"></div>
		<div class="small-12 medium-10 cell'">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php comments_template(); ?>
		<?php endwhile;?>
		</div>
	</main>
</div>
<?php get_footer();

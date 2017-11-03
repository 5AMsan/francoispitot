<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<div class="main-wrap full-width">
	<main class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_home_portfolio(); get_template_part( 'template-parts/home', 'portfolio' ); ?>
		<?php endwhile; wp_reset_postdata(); ?>
	</main>
</div>
<?php get_footer();

<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();

global $is_active;
$orbit_config = array('data-orbit');
$orbit_config[] = 'data-auto-play="false"';
$orbit_config[] = get_theme_mod('portfolio_use_bullets') ? 'data-bullets="true"' : 'data-bullets="false"';
$orbit_config[] = 'data-options="animation_speed:0;"';

$orbit_data = implode(' ', $orbit_config);
$bullets = array();
$is_active = "is-active";
?>


<div class="main-wrap grid-container fluid full">
	<main class="main-content">
	<?php if ( have_posts() ) : ?>

		<div class="orbit" role="region" aria-label="<?php single_term_title(); ?>" <?php echo $orbit_data; ?>>
		  <div class="orbit-wrapper">

				<div class="gallery-caption">
					<?php echo term_description(); ?>
				</div>

		    <div class="orbit-controls">
		      <button class="orbit-previous"><span class="show-for-sr"><?php _e('Précédent', 'foundationpress'); ?></span><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></button>
		      <button class="orbit-next"><span class="show-for-sr"><?php _e('Suivant', 'foundationpress'); ?></span><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></button>
		    </div>

		    <ul class="orbit-container">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/single', 'portfolio' );
						$bullets[] = "<button class=\"$is_active\" data-slide=\"$i\"><span class=\"show-for-sr\">First slide details.</span></button>";
						$is_active = null;
					endwhile; ?>
				</ul>

			</div>

			<?php if (get_theme_mod('portfolio_use_bullets')) : ?>
			<nav class="orbit-bullets">
				<?php echo implode("\r", $bullets); ?>
			</nav>
		<?php endif; ?>
		</div>

	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; // End have_posts() check. ?>


	</main>

</div>

<?php get_footer();

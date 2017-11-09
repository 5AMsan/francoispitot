<?php

include_once 'cpt.php';
include_once 'customizer.php';

function francoispitot_scripts() {
  wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/0d1f12f0e3.js');
}
add_action('wp_head', 'francoispitot_scripts');

// Add Stickies on Portfolio
// Use ACF and add ACF lite conf here

// Get first sticky portfolio for front page content
// Must reset post data after output
function get_home_portfolio() {
  global $post;

  $posts = get_posts(array(
    'numberposts' => 1,
    'post_type'   => 'portfolio',
    'meta_query'  => array(
      array(
        'key'   => 'portfolio_sticky',
        'value' => true,
      ),
    ),
  ));
  $post = reset($posts);
  setup_postdata($post);
}

// output portfolio projets navigation menu
function portfolio_navigation() {

  $term_id = 0;
  if (is_tax('projects')) {
    $term = get_queried_object();
    $term_id = $term->term_id;
  }
  $args = array(
    'current_category'  => $term_id,
    'taxonomy'          => 'projects',
    'title_li'          => __( '' ),
  );

  wp_list_categories( $args );
}


function google_analytics_script() {
  ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109440930-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109440930-1');
  </script>
  <?php
}
add_action('wp_head', 'google_analytics_script');

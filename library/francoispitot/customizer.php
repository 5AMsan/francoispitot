<?php

class FrancoisPitot_Customize {
  /**
   * This hooks into 'customize_register' (available as of WP 3.4) and allows
   * you to add new sections and controls to the Theme Customize screen.
   *
   * @see add_action( 'customize_register', $func )
   * @param WP_Customize_Manager $wp_customize
   */
  public static function register_settings( $wp_customize ) {
    // Portfolio Section
    $wp_customize->add_section( 'portfolio' , array(
      'title'    => esc_html__( 'Portfolio', 'foundationpress' ),
      'priority' => 70,
    ) );
    // Use bullets
    $wp_customize->add_setting( 'portfolio_use_bullets', array(
      'transport'         =>  'refresh',
      'default'           => false,
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'FrancoisPitot_Customize::sanitize_checkbox'
    ) );

    // Add control and output for select field
   $wp_customize->add_control( 'portfolio_use_bullets', array(
     'label'      => __( 'Utiliser les puces pour les pages projets', 'foundationpress' ),
     'section'    => 'portfolio',
     'type'       => 'checkbox'
   ) );
  }

  public static function sanitize_checkbox( $checked ) {
  // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }
}
add_action( 'customize_register' , array( 'FrancoisPitot_Customize' , 'register_settings' ) );

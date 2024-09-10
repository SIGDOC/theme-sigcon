<?php
  /**
   * Registers options with the Theme Customizer
   *
   * @param      object    $wp_customize    The WordPress Theme Customizer
   * @package    theme-sigcon
  */

  add_action( 'customize_register', 'sigcon_customize_register' );

  function sigcon_customize_register( $wp_customize ) {

    // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 2;
    $wp_customize->get_section('static_front_page')->priority = 3;
    
    
    /** Theme Options Panel
     * Add the SIGCON panel in the Customizer 
    */
    $wp_customize->add_panel( 'sigcon_theme_options', 
    array(
        'priority'         => 1,
        'title'            => __( 'SIGCON Theme Options', 'sigcon' ),
        'description'      => __( 'SIGCON theme mods can be done here', 'sigcon' ),
    ) 
    );

    // TOP HEADER MENU - Text Options Section Inside Theme
    $wp_customize->add_section( 'sigcon_top_header_text_options', 
    array(
        'title'         => __( 'Top Header Text Options', 'sigcon' ),
        'priority'      => 1,
        'panel'         => 'sigcon_theme_options'
    ) 
    );

    // FOOTER - Text Options Section Inside Theme
    $wp_customize->add_section( 'sigcon_footer_text_options', 
    array(
        'title'         => __( 'Footer Text Options', 'sigcon' ),
        'priority'      => 1,
        'panel'         => 'sigcon_theme_options'
    ) 
    );


    /** TOP HEADER CONTROLS
     * Add the options for the top headuer menu
    */

    // TOP HEADER MENU
    // Conference Location
    $wp_customize->add_setting( 'sigcon_conf_location_text',
    array(
        'default'           => __( 'City, State', 'sigcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
    );

    // TOP HEADER MENU
    // Conference Location
    $wp_customize->add_control( 'sigcon_conf_location_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'sigcon_top_header_text_options',
        'label'       => 'Add Conference Location',
        'description' => 'Provide city and state information',
    ) 
    );
    
    // TOP HEADER MENU
    // Conference Date Range add textfield
    $wp_customize->add_setting( 'sigcon_conf_daterange_text',
    array(
        'default'           => __( 'Month XX-XX, XXXX', 'sigcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
    );

    // TOP HEADER MENU
    // Conference Date Range add control
    $wp_customize->add_control( 'sigcon_conf_daterange_text', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'sigcon_top_header_text_options',
        'label'       => 'Add Conference Date Range',
        'description' => 'Provide the date range: Month xx-xx, xxxx',
    ) 
    );

    // FOOTER
    // Conference Chair add textfield
    $wp_customize->add_setting( 'sigcon_conf_chair_text',
    array(
        'default'           => __( 'Conference Chair(s) Name, Affiliation, City, State', 'sigcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
    );

    // FOOTER
    // Conference Chair add control
    $wp_customize->add_control( 'sigcon_conf_chair_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'sigcon_footer_text_options',
        'label'       => 'Conference Chair(s) Name, Affiliation, City, State',
        'description' => 'This information will be used in the footer',
    ) 
    );

    // FOOTER
    // Program Chair add textfield
    $wp_customize->add_setting( 'sigcon_program_chair_text',
    array(
        'default'           => __( 'Program Chair(s) Name, Affiliation, City, State', 'sigcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
    );

    // FOOTER
    // Program Chair add control 
    $wp_customize->add_control( 'sigcon_program_chair_text', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'sigcon_footer_text_options',
        'label'       => 'Program Chair(s) Name, Affiliation, City, State',
        'description' => 'This information will be used in the footer',
    ) 
    );

    // FOOTER - Setting for conference SRC CHAIR
    $wp_customize->add_setting( 'sigcon_src_chair_text',
    array(
        'default'           => __( 'SRC Chair(s) Name, Affiliation, City, State', 'sigcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
    );

    // FOOTER - Control for conference SRC CHAIR 
    $wp_customize->add_control( 'sigcon_src_chair_text', 
    array(
        'type'        => 'text',
        'priority'    => 30,
        'section'     => 'sigcon_footer_text_options',
        'label'       => 'SRC Chair(s) Name, Affiliation, City, State',
        'description' => 'This information will be used in the footer',
    ) 
    );

    // FOOTER - Setting for conference SPONSORSHIP CHAIR
    $wp_customize->add_setting( 'sigcon_sponsorship_chair_text',
    array(
        'default'           => __( 'Sponsorship Chair(s) Name, Affiliation, City, State', 'sigcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
    );

    // FOOTER - Control for conference SPONSORSHIP CHAIR 
    $wp_customize->add_control( 'sigcon_sponsorship_chair_text', 
    array(
        'type'        => 'text',
        'priority'    => 30,
        'section'     => 'sigcon_footer_text_options',
        'label'       => 'Sponsorship Chair(s) Name, Affiliation, City, State',
        'description' => 'This information will be used in the footer',
    ) 
    );

    // FOOTER - Setting for conference TECHNICAL EDITOR
    $wp_customize->add_setting( 'sigcon_tech_editor_text',
    array(
        'default'           => __( 'Technical Editor(s) Name, Affiliation, City, State', 'sigcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
    );

    // FOOTER - Control for conference TECHNICAL EDITOR 
    $wp_customize->add_control( 'sigcon_tech_editor_text', 
    array(
        'type'        => 'text',
        'priority'    => 40,
        'section'     => 'sigcon_footer_text_options',
        'label'       => 'Technical Editor(s) Name, Affiliation, City, State',
        'description' => 'This information will be used in the footer',
    ) 
    );

    // FOOTER - Setting for conference Industry Liaison
    $wp_customize->add_setting( 'sigcon_industry_liaison_text',
    array(
        'default'           => __( 'Industry Liaison(s) Name, Affiliation, City, State', 'sigcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
    );

    // FOOTER - Control for conference INDUSTRY Liaison
    $wp_customize->add_control( 'sigcon_industry_liaison_text', 
    array(
        'type'        => 'text',
        'priority'    => 50,
        'section'     => 'sigcon_footer_text_options',
        'label'       => 'Industry Liaison(s) Name, Affiliation, City, State',
        'description' => 'This information will be used in the footer',
    ) 
    );
  }

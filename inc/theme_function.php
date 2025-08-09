<?php

/**
 * Theme function
 */

function saiful_customizer_register($wp_customize){
 // Header area function
   $wp_customize->add_section('saiful_header_area', array(
      'title'=>__('Header Area', 'saifulislamarman'),
      'description'=>'You can update site header from here',
   ));

   $wp_customize->add_setting('saiful_logo', array(
      'default'=>get_bloginfo('template_directory').'/img/logo.png',
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'saiful_logo', array(
      'label'=>'Logo Upload',
      'description'=>'You can change site logo from here',
      'setting'=>'saiful_logo',
      'section'=>'saiful_header_area',
   )));

   // Menu position option
   $wp_customize->add_section('saiful_menu_option', array(
      'title' => __('Menu Position Option', 'saifulislamarman'),
      'description' => 'You can change menu position from here',
   ));

   $wp_customize->add_setting('saiful_menu_position', array(
      'default' => 'right_menu',
   ));

   $wp_customize->add_control('saiful_menu_position', array(
      'label' => 'Menu Position',
      'description' => 'Select your menu position',
      'setting' => 'saiful_menu_position',
      'section' => 'saiful_menu_option',
      'type' => 'radio',
      'choices' => array(
         'left_menu' => 'Left Menu',
         'right_menu' => 'Right Menu',
         'center_menu' => 'Center Menu',
      )
   ));

   // Footer option
   $wp_customize->add_section('saiful_footer_option', array(
      'title' => __('Footer option', 'saifulislamarman'),
      'description' => 'You can update your footer text from here',
   ));

   $wp_customize->add_setting('saiful_copyright_section', array(
      'default' => '&Copy; All right booked 2025 | Sefa It',
   ));

   $wp_customize->add_control('saiful_copyright_section', array(
      'label' => 'Copyright text',
      'description' => 'You can update your copyright text',
      'setting' => 'saiful_copyright_section',
      'section' => 'saiful_footer_option',
   ));

}

add_action('customize_register', 'saiful_customizer_register' );


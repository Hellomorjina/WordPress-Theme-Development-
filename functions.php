<?php
/**
  my theme functions
 **/ 


 // theme title

 add_theme_support('title-tag');

 // theme css and jquery file calling
 function ali_css_js_file_calling(){
  wp_enqueue_style( 'ali-style',get_stylesheet_uri());
  wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css', array() ,' v5.3.3','all');
  wp_register_style('custom',get_template_directory_uri().'/css/custom.css', array() ,' v1.0.0','all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('custom');


  // js file calling
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap',get_template_directory(  ) .'/js/bootstrap.js',array('jquery'),'5.3.3',true);
  wp_enqueue_script('main',get_template_directory(  ) .'/js/main.js',array('jquery'),'1.0.0',true);
}
add_action('wp_enqueue_scripts','ali_css_js_file_calling');
//goole font calling
function ali_google_font_calling(){
  wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet',false);
  wp_enqueue_style('googlefont');
}
add_action('wp_enqueue_scripts','ali_google_font_calling');
// Theme function for customizer
function ali_customizar_register($wp_customize) {
  // Add section for header area
  $wp_customize->add_section('ali_Header_area', array(
      'title'       => __('Header Area', 'alihossain'),
      'description' => __('If you want to update your header area, use this option.', 'alihossain'),
  ));

  // Add setting for logo upload
  $wp_customize->add_setting('ali_logo', array(
      'default' => get_template_directory_uri() . '/imgs/mylogo.png', 
      'transport' => 'refresh',
  ));

  // Add control for logo upload
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ali_logo', array(
      'label'    => __('Logo Upload', 'alihossain'),
      'section'  => 'ali_Header_area',
      'settings' => 'ali_logo',
  )));
  //manu position
  $wp_customize->add_section('ali_menu_option', array(
    'title' =>__('Menu position option','twentytwentyfour'),
    'description' => __('If you want to update your menu position, use this option.', 'alihossain'), // Corrected description
  ));

  // Add setting for menu position
  $wp_customize->add_setting('ali_menu_position', array(
    'default' => 'right_ menu',

  ));

  $wp_customize->add_control('ali_menu_position',array(
   'label' => 'menu position',
   'description' => 'select your menu position',
   'settings' => 'ali_menu_position',
   'section'  => 'ali_menu_option',
   'type' => 'radio',
   'choices' => array(
     'left_menu'=> 'left Menu',
     'right_menu' => 'right Menu',
     'center_menu' => 'center Menu'
   )

  ));
 
}

// Correct hook name
add_action('customize_register', 'ali_customizar_register');


// wp Menu register
register_nav_menu('main_menu', __('Main Menu','twentytwentyfour'));

?>


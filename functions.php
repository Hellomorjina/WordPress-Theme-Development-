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


// Theme function for customizer
function ali_customizar_register($wp_customize) {
  // Add section for header area
  $wp_customize->add_section('ali_Header_area', array(
      'title'       => __('Header Area', 'alihossain'),
      'description' => __('If you want to update your header area, use this option.', 'alihossain'),
  ));

  // Add setting for logo upload
  $wp_customize->add_setting('ali_logo', array(
      'default' => get_template_directory_uri() . '/imgs/mylogo.png', // Corrected path function
      'transport' => 'refresh',
  ));

  // Add control for logo upload
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ali_logo', array(
      'label'    => __('Logo Upload', 'alihossain'),
      'section'  => 'ali_Header_area',
      'settings' => 'ali_logo',
  )));
}

// Correct hook name
add_action('customize_register', 'ali_customizar_register');


?>


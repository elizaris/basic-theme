<?php
/*
==========================
Include Scripts
==========================
*/
function basic_script_enqueue() {
  //css
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),'4.0.0', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri().'/css/basic.css', array(),'1.0.0', 'all');
  //js
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(),'4.0.0', true);
  wp_enqueue_script('customjs', get_template_directory_uri().'/js/basic.js', array(),'1.0.0', true);
}
add_action('wp_enqueue_scripts', 'basic_script_enqueue');
/*
==========================
Activate menus
==========================
*/
function basic_setup(){
add_theme_support('menus');
register_nav_menu('primary', __('Primary Header Navigation'));
register_nav_menu('secondary', __('Secondary Navigation'));
}
add_action( 'init','basic_setup');



/*
==========================
Theme support function
==========================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
add_theme_support('html5', array('search-form'));
/*
==========================
Sidebar function
==========================
*/
function basic_widget_setup() {

  register_sidebar(
    array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => '',
        'description' => 'Standard Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	      'after_widget'  => '</li>',
	      'before_title'  => '<h2 class="widgettitle">',
	      'after_title'   => '</h2>',
    )
  );
}
add_action('widgets_init', 'basic_widget_setup');
/*
==========================
Head function
==========================
*/
function basic_remove_version(){
  return '';
}
add_filter('the_generator', 'basic_remove_version');

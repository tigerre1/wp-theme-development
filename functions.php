<?php

function learningWordPress_resources(){

  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts','learningWordPress_resources');



//Get top ancestor

function get_top_ancestor_id(){

  global $post;
  if($post->post_parent){

    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0];
  }
  return $post->ID;
}

function has_children(){
  global $post;
  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);
}

/*Custom excerpt word count*/


function excerpt_word_count(){
  return 15;
}
add_filter('excerpt_length','excerpt_word_count');


function learningWordPress_setup(){
  //Support for featured images
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array('gallery','link','aside'));
  add_image_size('small-image',180,120,true);
  add_image_size('banner-image',920,200,true);
  //Support site menus
  register_nav_menus( array(
		'primary_menu' => 'Primary Navigation Menu',
		'footer_menu' => 'My Custom Footer Menu',
	) );
}
add_action('after_setup_theme','learningWordPress_setup');


function learn_code_widget_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar' ),
        'id' => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Widget Three' ),
        'id' => 'widget-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Widget One' ),
        'id' => 'widget-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Widget Two' ),
        'id' => 'widget-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'learn_code_widget_init' );

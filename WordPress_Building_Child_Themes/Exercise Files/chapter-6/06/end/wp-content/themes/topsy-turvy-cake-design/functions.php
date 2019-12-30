<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array('parent-style'),
      wp_get_theme()->get('Version')
    );
}

/**
 * Documentation for function.
 */
function twentynineteen_the_posts_navigation() {
  the_posts_pagination(
    array(
      'mid_size'  => 2,
      'prev_text' => '&laquo; <span class="nav-prev-text">Newer</span>',
      'next_text' => '<span class="nav-next-text">Older</span> &raquo;',
    )
  );
}

function recipe_titles ($title, $id=null){
  if ( in_category( 'recipes', $id ) ) {
    $title = "Recipe: " . $title;
  }
  return $title;
}
add_filter('the_title', 'recipe_titles', 10, 2);

function twentynineteen_child_theme_setup(){
  // we want to conditionally show the widgets - not remove them entirely
  // remove_action( 'widgets_init', 'twentynineteen_widgets_init' );

  // Add a secondary menu to the child theme
  register_nav_menus(
    array(
      'menu-2' => __( 'Secondary', 'twentynineteen' ),
    )
  );
}
add_action('after_setup_theme', 'twentynineteen_child_theme_setup');


// do nothing since we only have one authoer and don't want to display anything
// this function is plugging a function in the parent theme so it must remain empty
function twentynineteen_posted_by(){
  //do nothing
}

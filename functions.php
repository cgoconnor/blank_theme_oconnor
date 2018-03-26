<?php
//function that registers register_my_menus

  function register_my_menu(){
    register_nav_menu('header-menu', ( 'Header Menu' ));
    register_nav_menu('footer-menu', ( 'Footer Menu' ));
  }

  add_action('init', 'register_my_menu');

  function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => _('Header Menu'),
        'footer-menu' => _('Footer Menu')
      )
    );
  }

  add_action('init', 'register_my_menus');

  //function to add featured image
  add_theme_support('post-thumbnails');

  //Registers widgets:
  function blank_widgets_init(){
    register_sidebar(array(
      'name' => ('Search bar widget'),
      'id' => 'search-bar',
      'Description' => 'This is the search bar in the header',
      'before_widget' => '<div class="search-bar">',
      'after_widget' => '</div>',
      'before' => '<h3>',
      'after' => '</h3>'
    ));

    register_sidebar(array(
      'name' => ('Sidebar widget'),
      'id' => 'sidebar-widget',
      'Description' => 'Sidebar widget area',
      'before_widget' => '<div class="sidebar-widget">',
      'after_widget' => '</div>',
      'before' => '<h3>',
      'after' => '</h3>'
    ));
  }

?>

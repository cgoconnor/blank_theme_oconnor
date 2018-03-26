<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php.bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <!--links to our style.css file-->
    <link rel="stylesheets" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
  </head>

  <body>
    <header>
      <div class="wrapper">
        <?php dynamic_sidebar('Search bar widget'); ?>

        <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>

        <h3><?php bloginfo('description'); ?></h3>

        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'header-menu')); ?>
      </div>
    </header>

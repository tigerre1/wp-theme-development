
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="container">

      <nav class='site-nav'>
        <?php wp_nav_menu(array(
             'theme_location'=> 'primary_menu'
        )); ?>
      </nav>


    <header class='site-header'>
      <!--  Header Search Form -->
      <div class='header-search'>
        <?php get_search_form(); ?>
      </div>

      <h1><a href='<?php echo home_url(); ?>'><?php bloginfo('name'); ?></a></h1>
      <h5><?php bloginfo('description') ?></h5>

    </header>

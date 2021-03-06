<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <link href="http://gmpg.org/xfn/11" rel="profile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <!-- Enable responsiveness on mobile devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>
  </head>

  <body>
    <?php get_sidebar(); ?>

    <div class="wrap">
      <div class="masthead">
        <div class="container">
          <h3 class="masthead-title">
            <a href="<?php bloginfo('url'); ?>" title="Home"><?php bloginfo('name' ); ?></a>
            <small><?php bloginfo('description') ?></small>
          </h3>
        </div>
      </div>

      <div class="container content">

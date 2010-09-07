<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head profile="http://gmpg.org/xfn/11">
    <title><?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <meta name="Copyright" content="DealerTrend Framework Theme: Copyright (c) 2010 DealerTrend, Inc., All Rights Reserved." />
    <?php dt_google_site_verify(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/960.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php dt_css_includes(); ?>
    <?php wp_head(); ?>
    <?php dt_js_includes(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="website" class="container_12">

      <div id="dt-header">
        <div id="header-text"><a href="/"><?php dt_header(); ?></a></div>
        <div id="header-zones">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header") ) : ?><?php endif; ?>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>

      <div id="menubar" class="grid_12 alpha omega">
          <?php
            //wp_list_pages('child_of='.$dm_page->ID.'&depth=1&title_li=&sort_column=menu_order');
            wp_nav_menu(array('sort_column' => 'menu_order', 'container_class' => 'nav') );
          ?>
      </div>
      <div class="clear"></div>

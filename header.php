<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--
    the wp_head() function is an important hook that allows for plugin developers to dynamically add CSS or JavaScript to your site. If we do not include this in our template, some plugins may not work
    -->
    <?php wp_head(); ?>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <?php 
        // Fix menu overlap bug..
        if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>'; 
      ?>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php echo bloginfo('name');?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
            <!--<li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">
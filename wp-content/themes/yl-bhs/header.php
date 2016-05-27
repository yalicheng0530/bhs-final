<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/_img/favicon.ico">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
 <div class="container">
  <div class="content-container clearfix">
    <div class="main-content">
      <header>
        <div class="misc-items">
          <ul class="top-nav">
            <li><a href="index.html">Home</a> </li>
            <li><a href="about-us.html">About Us</a> </li>
            <li><a href="faq.html">FAQ</a>  </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <!-- END .top-nav -->
          <a href="#" class="facebook-icon"><img class="facebook-button" src="<?php bloginfo('template_directory'); ?>/_img/facebook-btn.png" alt="facebook button"></a>
        <div class="search-container">
            <form class="search-form" method="get" action="#">
              <input class="search-input" type="text" onFocus="this.value=(this.value=='Search...')? '' : this.value ;" value="Search..." name="search">
              <input class="search-submit" type="image" value="Search" src="<?php bloginfo('template_directory'); ?>/_img/search-btn.gif">
            </form>
        <!-- END .search-form -->
        </div>
        <!-- END .search-container -->
        <a href="#" class="donate" target="_blank">
          <img src="<?php bloginfo('template_directory'); ?>/_img/donate-btn.png" alt="donate button">
        </a>
        <!-- END .donate -->
        </div>
        <!-- END .misc-items -->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a href="#">
                    <img class="logo" src="<?php bloginfo('template_directory'); ?>/_img/bhs_logo.png" alt="bhs logo">
                </a>
                </div>
                <!-- END .navbar-header -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <div id="navbar" class="navbar-collapse collapse">
               <?php
                $args = array(
                 'menu'    => 'header-menu',
                 'menu_class' => 'nav navbar-nav',
                 'container' => 'false'
                );
                wp_nav_menu( $args );
               ?>
              </div>
              <!-- <ul class="nav navbar-nav">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">ADDICTION</a></li>
                <li><a href="#">APPOINTMENT</a></li>
                <li><a href="#">CONTACT</a></li>
              </ul> -->
        </div>
        <!-- END .navbar-collapse -->
        </div>
        <!-- END .container-fluid -->
        </nav>
        <!-- END nav -->
  </header>
<!-- END header -->


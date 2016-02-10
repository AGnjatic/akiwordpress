<html>
<head>
  <?php wp_head();?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
</head>
<body>
<div id="wrapper">
<header>
  <div class="logo">
    <a href="<?php echo home_url(); ?>"></a>
  </div>
  <div class="nav">
    <div class="navicons">
      <a href="https://www.facebook.com/"><img src="<?php bloginfo('template_directory'); ?>\img\facebook_icon.png"></a>
      <a href="https://www.youtube.com/"><img src="<?php bloginfo('template_directory'); ?>\img\youtube_icon.png"></a>
    </div>
    <?php
    $args = array(
      'theme_location' => 'primary'
    );
     ?>

    <?php wp_nav_menu( $args );?>
  </div>
</header>

  <div class="main">
    <div class="slideshow">

    </div>

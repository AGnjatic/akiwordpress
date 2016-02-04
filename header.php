<html>
<head>
  <?php wp_head();?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
</head>
<body>

<header>
  <div class="logo">
    <a href="<?php echo home_url(); ?>"></a>
  </div>
  <div class="nav">
    <div class="navicons">
      <a href="https://www.facebook.com/"><img src="https://www.facebook.com/images/fb_icon_325x325.png"></a>
      <a href="https://www.youtube.com/"><img src="http://squareonesask.ca/wp-content/uploads/2015/05/YouTube.png"></a>
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

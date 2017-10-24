<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nicholas Cameron is a front-end developer and digital strategist, currently based in Toronto.">

	<!-- Google Plus -->
	<meta itemprop="name" content="Nicholas Cameron">
	<meta itemprop="description" content="Nicholas Cameron is a front-end developer and digital strategist, currently based in Toronto.">
	<meta itemprop="image" content="wp-content/themes/wordpress_starter_theme_hacker_you/images/your_new_images/widetile.png">

	<meta name="twitter:card" content="wp-content/themes/wordpress_starter_theme_hacker_you/images/your_new_images/largetile.png">
	<meta name="twitter:title" content="Nicholas Cameron">
	<meta name="twitter:description" content="Nicholas Cameron is a front-end developer and digital strategist, currently based in Toronto.">
	<meta name="twitter:image:src" content="wp-content/themes/wordpress_starter_theme_hacker_you/images/your_new_images/widetile.png">
	
	<meta property="og:title" content="Nicholas Cameron" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.hellonicholascameron.com/" />
	<meta property="og:description" content="Nicholas Cameron is a front-end developer and digital strategist, currently based in Toronto." /> 
	<meta property="og:site_name" content="Nicholas Cameron" />

	<link rel="icon" type="image/png" href="wp-content/themes/wordpress_starter_theme_hacker_you/images/your_new_images/favicon-32x32.png" sizes="32x32">

  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900|Karla:400,700' rel='stylesheet' type='text/css'> -->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
 
</head>


<body <?php body_class(); ?>>




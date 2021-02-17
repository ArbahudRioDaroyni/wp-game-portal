<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "header" tag.
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-game-portal
 * @package WP Game Portal
 * @subpackage WP Game Portal
 * @since 1.0.0
 */
  
?>
<!doctype html>
<html lang="<?= get_locale(); ?>">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="google-site-verification" content="1GS5b8XueaIk5rOTEhD8hwGXIfoZfAtK2KTCJlkJNDY" />
    <title>Game Portal</title>
    <meta name="description" content="Informasi, Review, dan Berita Seputar Game">
    <meta name="keywords" content="Game, Gaming, Review Game, Berita Game">
    <meta name='author' content='<?php bloginfo( 'name' ); ?>' />
    <meta property="og:title" content="Game Portal" />
    <meta name="twitter:title" content="Game Portal" />
    <meta property="og:description" content="Informasi, Review, dan Berita Seputar Game" />
    <meta name="twitter:description" content="Informasi, Review, dan Berita Seputar Game" />
    <link rel="alternate" href="<?= get_site_url() ?>/?lang=in" hreflang="in"/>
    <link rel="alternate" href="<?= get_site_url() ?>/" hreflang="x-default"/>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?= get_site_url() ?>/xmlrpc.php" />
    <meta property="og:locale" content="<?= get_locale() ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?= get_permalink() ?>" />
    <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    
    <!-- start wp_head -->
    <?php wp_head(); ?>
    <!-- end wp_head -->

    <!-- custon css -->
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/vendor/photoswipe/dist/default-skin/default-skin.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/goodgames.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/style.css">

    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
  </head>
  <body>
    <header class="header">
      <!-- START: Top Navs -->
      <?php get_template_part( 'template-parts/components/top-navs' ); ?>
      <!-- END: Top Navs -->

      <!-- START: Navbar -->
      <?php get_template_part( 'template-parts/components/navbar' ); ?>
      <!-- END: Navbar -->
    </header>
    <!--START: Navbar Mobile -->
    <?php get_template_part( 'template-parts/components/navbar-mobile' ); ?>
    <!-- END: Navbar Mobile -->
<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!DOCTYPE html>
<html id="control" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <meta name="theme-color" content="#29211d;">
    <meta name="msapplication-TileColor" content="#29211d;">
    <meta name="msapplication-navbutton-color" content="#29211d;">
    <meta name="apple-mobile-web-app-status-bar-style" content="#29211d;">
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&family=Roboto:wght@300;700&display=swap">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Begin Partallax Hero Header -->
<header class="header--global">

    <a class="link" href="<?php echo home_url('/'); ?>">
        <div class="logo"></i> THREE PEAKS ADVENTURE CO.</div>
        <div class="logo--alt"></i> THREE PEAKS ADVENTURE CO.</div>
    </a>

    <a class="button--contact" href="#">Schreib uns</a>

    <div class="menu--icon">
        <div class="icon--burger"></div>
    </div>

</header>

<!-- Begin Nav -->
<nav class="nav--main">
    <div class="wrapper--menu">
        <?php wp_nav_menu('main'); ?>
    </div>
    <div class="nav--seperator">
        <img title="Dekoratives Bild" alt="Seperator Bild" width="1920" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/seperator-bottom-nav.svg' ?>">
    </div>
</nav>
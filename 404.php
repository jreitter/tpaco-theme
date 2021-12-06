<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!-- Begin Header -->
<?php get_header(); ?>

<!-- Begin Content -->
<div class="content--main site404">

    <div class="wrapper--content spacing">

        <div class="wrapper--main-content" data-aos="fade-up">
            <img class="img404" alt="404 Error" width="500" src="<?php echo get_template_directory_uri() . '/inc/img/404.svg' ?>">
        </div>

        <div data-aos="fade-up" class="text">
            <h1>Das hätte nicht passieren sollen!</h1>
            <a class="link" title="Link zum Angebot" href="<?php echo home_url("/") ?>" class="card--button">Zurück zur Startseite <img title="Bild zur Dekoration" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/link.svg' ?>" width="20" alt="Link Pfeil icon" ></a>
        </div>

    </div>

</div>

<!-- Begin Footer -->
<?php get_footer(); ?>
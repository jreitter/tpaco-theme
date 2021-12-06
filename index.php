<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!-- Begin Header -->
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Begin Content -->
<div class="content--main">

    <div class="wrapper--content spacing">

        <div data-aos="fade-up" class="wrapper--title">
            <h1 class="title--section"><?php the_title(); ?></h1>
            <img class="blobb" src="<?php echo get_template_directory_uri() . '/inc/img/blobb.png' ?>" alt="Blobb">
        </div>
        
        <div class="wrapper--main-content" data-aos="fade-up"><?php the_content(); ?></div>

    </div>

</div>

<?php endwhile; else : ?>
<?php endif; ?>

<!-- Begin Footer -->
<?php get_footer(); ?>
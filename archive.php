<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!-- Begin Header -->
<?php get_header(); ?>

    <section class="content--specials">
            <div class="wrapper--content spacing wrapper--angebote">

            <div data-aos="fade-up" class="wrapper--title">
                <h1 class="title--section">Unsere individuellen Reiseangebote</h1>
                <img class="blobb" src="<?php echo get_template_directory_uri() . '/inc/img/blobb.png' ?>" alt="Blobb">
            </div>

            <div data-aos="fade-up" class="filter--bar">
                <button data-filter-reset="alle" class="button--filter">Alle Länder</button>
                <button data-filter="Slowenien" class="button--filter">Slowenien</button>
                <button data-filter="Frankreich" class="button--filter">Frankreich</button>
                <button data-filter="Deutschland" class="button--filter">Deutschland</button>
                <button data-filter="Italien" class="button--filter">Italien</button>
                <button data-filter="Schweiz" class="button--filter">Schweiz</button>
            </div>

            <!-- Begin Angebote -->
            <?php 
            $args = array(
                'post_type'         => 'angebote',
                'post_status'       => 'publish',
            );
            
            $query = new WP_Query( $args );               
            ?>
            
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            
            <div data-aos="fade-up" class="wrapper--deal 
                <?php 
                $categories = get_the_category();   
                foreach ( $categories as $category ) {
                    echo ($category->cat_name);
                    echo ' ';
                }
                ?> 
                ">
                    <div class="card--image" aria-label="Dieses Foto zeigt das im Reiseangebot beschriebene Urlaubsgebiet" style="background-image: url(<?php the_post_thumbnail_url('img-featured-angebote');?>)"></div>
                    <div class="card--content">
                        <h3 class="card--title"><?php the_title(); ?></h3>
                        <div class="card--meta"><?php the_field('preis-angebote'); ?></div>
                        <div class="card--info"><?php echo wp_trim_words( get_field( 'kurzbeschreibung-angebot' ), 40, '...'); ?></div>
                        <a href="<?php the_permalink(); ?>" class="card--button link">Anschauen <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/link.svg' ?>" width="20"></a>
                    </div>
                </div>

            <?php endwhile; wp_reset_postdata(); else : ?>
            <?php endif; ?>

        </div>
    </section>

<!-- Begin Footer -->
<?php get_footer(); ?>
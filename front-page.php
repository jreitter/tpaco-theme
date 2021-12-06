<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!-- Begin Header -->
<?php get_header(); ?>

<!-- Begin Partallax Hero Header -->
<header class="header--main">

    <div class="gradient--top"></div>

    <a title="Link zur Startseite" href="<?php echo home_url('/'); ?>">
        <div class="logo"></i> THREE PEAKS ADVENTURE CO.</div>
        <div class="logo--alt"></i> THREE PEAKS ADVENTURE CO.</div>
    </a>

    <a title="Schreib uns eine Email" class="button--contact" href="#">Schreib uns</a>

    <div class="menu--icon">
        <div class="icon--burger"></div>
    </div>
    
    <div class="preloader observe">
        <div class="icon--preloader"><img title="Preloader Icon" alt="Preloader Icon" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/loader.svg' ?>" width="100"></div>
    </div>

    <div class="container--parallax">
        <div data-speed="-0.7" style="background-image:url(<?php echo get_stylesheet_directory_uri() . '/inc/img/baseplate.jpg' ?>);" class="container--image"></div>
        <div data-speed="-0.6" style="background-image:url(<?php echo get_stylesheet_directory_uri() . '/inc/img/one.png' ?>);" class="container--image"></div>
        <div data-speed="-0.4" style="background-image:url(<?php echo get_stylesheet_directory_uri() . '/inc/img/two.png' ?>);" class="container--image"></div>
        <div data-speed="-0.3" class="container--image hero"></div>
        <div data-speed="-0.1" style="background-image:url(<?php echo get_stylesheet_directory_uri() . '/inc/img/three.png' ?>);" class="container--image"></div>
    </div>
    <div class="gradient--transfer"></div>
    
    <div class="icon--scroll"></div>

</header>

<!-- Begin Intro -->
<section class="content--alps spacing">

    <div class="wrapper--flex">
        
        <div data-speed="5" data-aos="fade-down" class="wrapper--alp-image">
            <?php $image = get_field('foto-intro1'); ?>
            <img class="alp--image" alt="Eine Schotterstraße schlängelt sich durch einen Nadelwald" title="Eine Schotterstraße schlängelt sich durch einen Nadelwald" width="285" src="<?php echo $image['sizes']['img-featured-angebote']; ?>">
            <img class="icon--alp" alt="Text Icon" title="Text Icon" width="60" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/A.svg' ?>">
        </div>
        <div data-speed="7" data-aos="fade-down-alt" class="wrapper--alp-image">
            <?php $image = get_field('foto-intro2'); ?>
            <img class="alp--image" alt="Zwei Schaafe stehen auf einer Weide in den Bergen" title="Zwei Schaafe stehen auf einer Weide in den Bergen" width="285" src="<?php echo $image['sizes']['img-featured-angebote']; ?>">
            <img class="icon--alp" alt="Text Icon" title="Text Icon" width="60" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/L.svg' ?>">
        </div>
        <div data-speed="5" data-aos="fade-down" class="wrapper--alp-image">
            <?php $image = get_field('foto-intro3'); ?>
            <img class="alp--image" alt="Eine Berglandschaft mit Nadelwald und schneebedeckten Bergspitzen" title="Eine Berglandschaft mit Nadelwald und schneebedeckten Bergspitzen" width="285" src="<?php echo $image['sizes']['img-featured-angebote']; ?>">
            <img class="icon--alp" alt="Text Icon" title="Text Icon" width="60" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/P.svg' ?>">
        </div>
        <div data-speed="7" data-aos="fade-down-alt" class="wrapper--alp-image">
            <?php $image = get_field('foto-intro4'); ?>
            <img class="alp--image" alt="Ein altes Bahngleis wird langsam von einem Baum verwachsen" title="Ein altes Bahngleis wird langsam von einem Baum verwachsen" width="285" src="<?php echo $image['sizes']['img-featured-angebote']; ?>">
            <img class="icon--alp" alt="Text Icon" title="Text Icon" width="60" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/S.svg' ?>">
        </div>
    </div>

    <div data-aos="fade-up" class="wrapper--text">
        <div class="wrapper--title">
            <h1 class="title--section"><?php the_field('heading-intro'); ?></h1>
            <img title="Hintergrundbild zur Dekoration" class="blobb" src="<?php echo get_template_directory_uri() . '/inc/img/blobb.png' ?>" alt="Blobb Hintergrund" >
        </div>

        <?php the_field('text-intro'); ?>
    </div>

</section>

<!-- Begin Specials -->
<section class="content--specials">

    <?php $image = get_field('bg-angebote'); ?>
    <div class="wrapper--background" style="background-image:url(<?php echo $image['sizes']['banner']; ?>)" aria-label="Dieses Foto dient der Dekoration und zeigt eine Berglandschaft">
        <div class="gradient--transfer"></div>
    </div>
    
    <div class="wrapper--content spacing">
        <div data-aos="fade-up" class="wrapper--text pull--up">
            <h2 class="title--section"><?php the_field('heading-angebote'); ?></h2>

            <?php the_field('text-angebote'); ?>
        </div> 

        <div class="wrapper--angebote">

            <!-- Begin Featured Angebote -->
            <?php 
            $args = array(
                'post_type'         => 'angebote',
                'post_status'       => 'publish',
                'category_name'     => 'featured',
                'posts_per_page'    => '1',
            );
            
            $query = new WP_Query( $args ); 
            ?>

            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        
                <div data-aos="fade-up" class="wrapper--top-deal">
                    <div class="card--top-deal">
                        <div class="card--image" style="background-image: url(<?php the_post_thumbnail_url('img-featured-angebote');?>);" aria-label="Dieses Foto zeigt das im Reiseangebot beschriebene Urlaubsgebiet"></div>
                        <div class="card--content">
                            <h3 class="card--title"><?php the_title(); ?></h3>
                            <div class="card--meta"><?php the_field('preis-angebote'); ?></div>
                            <div class="card--info"><?php echo wp_trim_words( get_field( 'kurzbeschreibung-angebot' ), 40, '...'); ?></div>
                            <a title="Link zum Angebot" href="<?php the_permalink(); ?>" class="card--button link">Anschauen <img title="Bild zur Dekoration"src="<?php echo get_stylesheet_directory_uri() . '/inc/img/link.svg' ?>" width="20" alt="Link Pfeil Icon" ></a>
                        </div>
                    </div>
                    
                    <?php $image = get_field('akzentfoto1'); ?>
                    <div class="card--image image--side" style="background-image: url(<?php echo $image['sizes']['img-featured-angebote']; ?>);" aria-label="Dieses Foto zeigt das im Reiseangebot beschriebene Urlaubsgebiet">
                        <div class="card--badge">HOT RIGHT NOW</div>
                    </div>
                    <?php $image = get_field('akzentfoto2'); ?>
                    <div class="card--image image--side" style="background-image: url(<?php echo $image['sizes']['img-featured-angebote']; ?>);" aria-label="Dieses Foto zeigt das im Reiseangebot beschriebene Urlaubsgebiet">
                    </div>
                </div>

            <?php endwhile; wp_reset_postdata(); else : ?>
            <?php endif; ?>

            <!-- Begin Angebote -->
            <?php 
            $args = array(
                'post_type'         => 'angebote',
                'post_status'       => 'publish',
                'cat'               => '-3',
                'posts_per_page'    => '3',
            );
            
            $query = new WP_Query( $args ); 
            ?>
            
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <div data-aos="fade-up" class="wrapper--deal">
                    <div class="card--image" style="background-image: url(<?php the_post_thumbnail_url('img-featured-angebote');?>)" aria-label="Dieses Foto zeigt das im Reiseangebot beschriebene Urlaubsgebiet"></div>
                    <div class="card--content">
                        <h3 class="card--title"><?php the_title(); ?></h3>
                        <div class="card--meta"><?php the_field('preis-angebote'); ?></div>
                        <div class="card--info"><?php echo wp_trim_words( get_field( 'kurzbeschreibung-angebot' ), 40, '...'); ?></div>
                        <a title="Link zum Angebot" href="<?php the_permalink(); ?>" class="card--button">Anschauen <img title="Bild zur Dekoration" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/link.svg' ?>" width="20" alt="Link Pfeil icon" ></a>
                    </div>
                </div>

            <?php endwhile; wp_reset_postdata(); else : ?>
            <?php endif; ?>
            
            <!-- Begin Angebote Link -->
            <div data-aos="fade-up" class="blobb-wrapper">
                <div class="nav--angebote">
                    <a title="Link zur Angebotsübersicht" href="<?php echo home_url("/") . "angebote"; ?>">Schau dir alle unsere Angebote an
                    <img title="Bild zur Dekoration" width="30" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/link-white.svg' ?>" alt="Link Pfeil Icon" ></a>
                </div>
                <img title="Hintergrundbild zur Dekoration" class="blobb" src="<?php echo get_template_directory_uri() . '/inc/img/blobb.png' ?>" alt="Blobb Hintergrund" >
            </div>

        </div>
    </div>

</section>

<!-- Begin Social Proof -->
<section class="content--proof">

    <?php $image = get_field('bg-proof'); ?>
    <div class="wrapper--background" style="background-image:url(<?php echo $image['sizes']['banner']; ?>)" aria-label="Dieses Foto dient als Dekoration und zeigt eine Gruppe von Freunden beim Wandern">
        <div class="gradient--transfer"></div>
    </div>
    
    <div class="wrapper--content spacing">
        
        <div data-aos="fade-up" class="wrapper--text pull--up">
            <h2 class="title--section"><?php the_field('heading-proof'); ?></h2>

            <?php the_field('text-proof'); ?>
        </div>

        <div data-aos="fade-up" class="slider--proof">

            <button class="prev--slider nav--slick"><i class="fas fa-chevron-left"></i></button>
            <button class="next--slider nav--slick"><i class="fas fa-chevron-right"></i></button>
        
            <div class="wrapper--proof">

            <?php 
            $args = array(
                'post_type'         => 'feedback',
                'post_status'       => 'publish',
                'posts_per_page'    => '4',
            );
            
            $query = new WP_Query( $args ); 
            ?>

            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="card--slider">
                    <div class="proof--header">
                        <div class="proof--image">
                            <?php $image = get_field('feedback-foto'); ?>
                            <img Title="Profilfoto" src="<?php echo $image['sizes']['thumbnail'] ?>" width="100" alt="Profilfoto des Rezesenten / der Rezesentin" >
                        </div>
                        <div class="proof--meta">
                            <div class="proof--name"><?php the_title(); ?></div>
                            <div class="proof--rating">
                            <?php if( get_field('feedback-rating') == '1' ) { ?>
                                <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            <?php } ?>
                            <?php if( get_field('feedback-rating') == '2' ) { ?>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            <?php } ?>
                            <?php if( get_field('feedback-rating') == '3' ) { ?>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            <?php } ?>
                            <?php if( get_field('feedback-rating') == '4' ) { ?>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            <?php } ?>
                            <?php if( get_field('feedback-rating') == '5' ) { ?>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="proof--content">
                        <div class="proof--title"><?php the_field('feedback-title'); ?></div>
                        <div class="proof--text"><?php the_content(); ?></div>
                    </div>
                </div>

            <?php endwhile; wp_reset_postdata(); else : ?>
            <?php endif; ?>
                
            </div>

        </div>

    </div>
</section>


<!-- Begin Footer -->
<?php get_footer(); ?>
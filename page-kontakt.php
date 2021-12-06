<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!-- Begin Header -->
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Begin Content -->
<section class="content--main">

    <div class="wrapper--content spacing">

        <div data-aos="fade-up" class="wrapper--title">
            <h1 class="title--section"><?php the_title(); ?></h1>
            <img class="blobb" src="<?php echo get_template_directory_uri() . '/inc/img/blobb.png' ?>" alt="Blobb" >
        </div>
        
        <div class="wrapper--main-content kontakt" data-aos="fade-up">
            <div class="card--single">
                <div class="wrapper--flex">
                    <div class="flex--col">
                        <h2>Firmensitz</h2>
                        <address>
                            Three Peaks Adventure Co.<br>
                            Irgendeine-Straße 12 <br>
                            6341 Ebbs<br>
                            Österreich<br>
                        </address>

                        <div class="mail">
                            Mail: <a href="mailto:&#x68;&#x65;&#x6c;&#x6c;&#x6f;&#x40;&#x74;&#x70;&#x62;&#x2e;&#x63;&#x6f;&#x6d;">&#x68;&#x65;&#x6c;&#x6c;&#x6f;&#x40;&#x74;&#x70;&#x62;&#x2e;&#x63;&#x6f;&#x6d;</a>
                        </div>
                        <div class="phone">
                            Tel: <a href="tel:&#x2b;&#x34;&#x33;&#x36;&#x37;&#x36;&#x39;&#x38;&#x36;&#x33;&#x35;&#x34;">&#x2b;&#x34;&#x33;&#x36;&#x37;&#x36;&#x39;&#x38;&#x36;&#x33;&#x35;&#x34;</a>
                        </div>

                        <h2>Außenstelle Deutschland</h2>
                        <address>
                            Three Peaks Adventure Co.<br>
                            Irgendeine-Straße 12 <br>
                            83654 Oberwalchen<br>
                            Deutschland<br>
                        </address>
                        
                        <div class="mail">
                            Mail: <a href="mailto:&#x68;&#x65;&#x6c;&#x6c;&#x6f;&#x40;&#x74;&#x70;&#x62;&#x2e;&#x63;&#x6f;&#x6d;">&#x68;&#x65;&#x6c;&#x6c;&#x6f;&#x40;&#x74;&#x70;&#x62;&#x2e;&#x63;&#x6f;&#x6d;</a>
                        </div>
                        <div class="phone">
                            Tel: <a href="tel:&#x2b;&#x34;&#x33;&#x36;&#x37;&#x36;&#x39;&#x38;&#x36;&#x33;&#x35;&#x34;">&#x2b;&#x34;&#x33;&#x36;&#x37;&#x36;&#x39;&#x38;&#x36;&#x33;&#x35;&#x34;</a>
                        </div>
                        <div class="social">
                            <a target="_blank" href="https://www.instagram.com/threepeaksadventureco/">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/threepeaksadventureco/">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/threepeaksadventureco/">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a target="_blank" href=https://www.instagram.com/threepeaksadventureco/#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/threepeaksadventureco/">
                                <i class="fab fa-flickr"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex--col">
                        <?php echo do_shortcode('[contact-form-7 id="382" title="Ohne Titel"]'); ?>
                    </div>
                </div>
            </div>

            <div class="wrapper--maps">
                
                <h2 data-aos="fade-up" class="title--single-section aos-init aos-animate">So findest du uns</h2>
                <div id="googlemaps"></div>
            </div>
        </div>

    </div>

</section>

<?php endwhile; else : ?>
<?php endif; ?>

<!-- Begin Footer -->
<?php get_footer(); ?>
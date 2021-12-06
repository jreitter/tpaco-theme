<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!-- Begin Header -->
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Begin Content -->
<article class="content--main content--specials">

    <div class="wrapper--content spacing">

        <div data-aos="fade-up" class="wrapper--title">
            <h1 class="title--section"><?php the_title(); ?></h1>
            <img class="blobb" src="<?php echo get_template_directory_uri() . '/inc/img/blobb.png' ?>" alt="Blobb" >
        </div>
        
        <div data-aos="fade-up" class="wrapper--top-deal">
            <div class="card--top-deal">
                <div class="card--image" style="background-image: url(<?php the_post_thumbnail_url('img-featured-angebote');?>);" aria-label="Dieses Foto zeigt das im Reiseangebot beschriebene Urlaubsgebiet"></div>
                <div class="card--content">
                    <div class="card--info"><?php the_field( 'kurzbeschreibung-angebot' ); ?></div>
                </div>
            </div>
            
            <?php $image = get_field('akzentfoto1'); ?>
            <div class="card--image image--side" style="background-image: url(<?php echo $image['sizes']['img-featured-angebote']; ?>);" aria-label="Dieses Foto zeigt das im Reiseangebot beschriebene Urlaubsgebiet">
            </div>
            <?php $image = get_field('akzentfoto2'); ?>
            <div class="card--image image--side" style="background-image: url(<?php echo $image['sizes']['img-featured-angebote']; ?>);" aria-label="Dieses Foto zeigt das im Reiseangebot beschriebene Urlaubsgebiet">
            </div>
        </div>
        
        <div class="wrapper--the-content">
            <h2 data-aos="fade-up" class="title--single-section">So sieht dein Abenteuer im Detail aus</h2>
            <div data-aos="fade-up" class="the--content"><?php echo the_content(); ?></div>
        </div>


        <div class="wrapper--single-card">
            <h2 data-aos="fade-up" class="title--single-section">Termine & Preise</h2>
            <div class="card--single" data-aos="fade-up">
               <div class="table">
               <?php $table = get_field( 'reisedaten-angebot' );

                if ( ! empty ( $table ) ) {
                    echo '<table>';
                        if ( ! empty( $table['caption'] ) ) {
                            echo '<caption>' . $table['caption'] . '</caption>';
                        }

                        if ( ! empty( $table['header'] ) ) {
                            echo '<thead>';
                                echo '<tr>';
                                    foreach ( $table['header'] as $th ) { 
                                        echo '<th>';
                                            echo $th['c'];
                                        echo '</th>';
                                    }
                                echo '</tr>';
                            echo '</thead>';
                        }
                
                        echo '<tbody>';
                            foreach ( $table['body'] as $tr ) {
                                echo '<tr>';
                                    foreach ( $tr as $td ) {
                                        echo '<td>';
                                            echo $td['c'];
                                        echo '</td>';
                                    }
                                echo '</tr>';
                            }
                        echo '</tbody>';
                    echo '</table>';
                } ?>
               </div>
            </div>
            
            <a class="card--button link" data-aos="fade-up" href="<?php the_permalink(); ?>">Jetzt Abenteuer buchen <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/link.svg' ?>" width="20" ></a>
        </div>

        <div class="wrapper--single-card">
            <h2 data-aos="fade-up" class="title--single-section">Impressionen</h2>
            <div class="card--single" data-aos="fade-up">
                <div class="gallery--single">
                    <?php $images = get_field('impressionen-angebot');
                    $size = 'square';
                    if( $images ): ?>
                        <ul>
                            <?php foreach( $images as $image_id ): ?>
                                <li> 
                                    <a href="<?php echo wp_get_attachment_image_src( $image_id, 'full' )[0]; ?>">
                                        <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

            <a data-aos="fade-up" href="<?php echo home_url("/") . 'angebote' ?>" class="card--button link">Zurück zur Übersicht <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/link.svg' ?>" width="20" ></a>
        </div>


    </div>


</article>

<?php endwhile; else : ?>
<?php endif; ?>

<!-- Begin Footer -->
<?php get_footer(); ?>
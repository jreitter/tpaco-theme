<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<div class="footer--seperator">
    <img title="Dekoratives Bild" class="seperator--mountains" width="200" alt="Seperator Bild" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/seperator-bottom.svg' ?>">
</div>
<footer class="footer--main">

    <div class="footer--top">
        <div class="footer--logo">
            <img title="Thee Peaks Adventure Co. Logo" alt="Thee Peaks Adventure Co. Logo" width="250" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/tpb-footer-logo.svg' ?>">
        </div>
        <div class="footer--contact">
            <ul>
                <li><a title="Schreib uns eine Email" class="contact--mail" href="#">hello@tpb.com</a></li>
                <li><a title="Ruf uns an" class="contact--phone" href="#">+43 676 654 889</a></li>
            </ul>
        </div>
    </div>

    <div class="footer--bottom">
        <address class="footer--address">
            Three Peaks Adventure Co. <br>
            Irgendeine-Straße 12 <br>
            A-6341 Ebbs <br>
            Österreich
        </address>
        <nav class="footer--menue">
            <div class="social">
                <a title="Link zu Social Media Profil" target="_blank" href="https://www.instagram.com/threepeaksadventureco/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a title="Link zu Social Media Profil" target="_blank" href="https://www.instagram.com/threepeaksadventureco/">
                    <i class="fab fa-twitter"></i>
                </a>
                <a title="Link zu Social Media Profil" target="_blank" href="hhttps://www.instagram.com/threepeaksadventureco/">
                    <i class="fab fa-facebook"></i>
                </a>
                <a title="Link zu Social Media Profil" target="_blank" href="https://www.instagram.com/threepeaksadventureco/">
                    <i class="fab fa-pinterest"></i>
                </a>
                <a title="Link zu Social Media Profil" target="_blank" href="https://www.instagram.com/threepeaksadventureco/">
                    <i class="fab fa-flickr"></i>
                </a>
            </div>
            <ul>
                <li><a title="Impressum" href="<?php echo home_url("/") . 'impressum' ?>">Impressum</a></li>
                <li><a title="Datenschutzerklärung" href="<?php echo home_url("/") . 'datenschutzerklaerung' ?>">Datenschutz</a></li>
                <li><a title="Cookie Erklärung" href="<?php echo home_url("/") . 'cookie-richtlinie' ?>">Cookies</a></li>
            </ul>
        </nav>
    </div>

</footer>

<!-- Begin WP Footer -->
<?php wp_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/vendor/jquery.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/vendor/slick.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/vendor/aos.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/vendor/imagesloaded.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/observer.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/aos.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/parallax.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/nav.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/carousell.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/filter.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/imagesloaded.js' ?>"></script>

<?php if ( is_page('Kontakt') ) { ?>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6KEitWfW2dgSXLLSZG3uwNE-3HB3yXzE&callback=initMap"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/inc/js/maps.js' ?>"></script>
<?php } ?>

</body>
</html>
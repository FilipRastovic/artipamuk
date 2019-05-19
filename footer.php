<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package textileart
 */

?>

<footer class="footer">
        <div class="container-fluid">
            <div class="row footer-up hidden-xs hidden-sm">
                <div class="col-md-4 col-md-offset-8"><a href="#" class="footerBackToTop"><span class="fa fa-angle-up"></span><?php _e( 'Nazad na vrh', 'textileart' ); ?></a></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row footer-up hidden-md hidden-lg">
                <div class="col-xs-4"><h3 class="heading-tertiary"><?php _e( 'Artipamuk', 'textileart' ); ?></h3></div>
                <div class="col-xs-4 col-xs-offset-4"><a href="#" class="footerBackToTop"><span class="fa fa-angle-up"></span><?php _e( 'TOP', 'textileart' ); ?></a></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row footer-down">
                <div class="col-xs-8 col-md-2"> <a href="https://www.facebook.com/Slikanje-na-tekstilu-1027089003994538/" target="_blank" ><span class="fa fa-facebook"></span></a> <a href="https://www.instagram.com/artipamuk/" target="_blank"><span class="fa fa-instagram"></span></a></div>
                <div class="col-md-3 hidden-xs hidden-sm"><p></p></div>
                <div class="col-xs-6 col-xs-offset-2 col-md-3 col-md-offset-2"><p><?php _e( 'Artipamuk', 'textileart' ); ?></p></div>
            </div>
        </div>
    </footer>
</body>
<?php wp_footer(); ?>
</html>

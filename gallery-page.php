<?php
/**
 * Template Name: Gallery Page
 *
 *
 * @package textileart
 */

get_header();
?>

<section class="gallery-page">
    <div class="container">
        <div class="row text-center">
            <h4 class="heading-primary--sub"><?php the_field( 'gallery_small_title' ); ?></h4>
            <h1 class="heading-primary heading-primary--main"><?php the_field( 'gallery_big_title' ); ?></h1>
            <!-- Vertical Line -->
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_1'); ?>" alt="Img"></div>
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_2'); ?>" alt="Img"></div>
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_3'); ?>" alt="Img"></div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_4'); ?>" alt="Img"></div>
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_5'); ?>" alt="Img"></div>
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_6'); ?>" alt="Img"></div>
            
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_7'); ?>" alt="Img"></div>
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_8'); ?>" alt="Img"></div>
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_9'); ?>" alt="Img"></div>
            
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_10'); ?>" alt="Img"></div>
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_11'); ?>" alt="Img"></div>
            <div class="col-sm-4 col-md-4"><img class="img-responsive" src="<?php the_field( 'gallery_img_12'); ?>" alt="Img"></div>
        </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


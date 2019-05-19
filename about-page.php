<?php
/**
 * Template Name: About Page
 *
 *
 * @package textileart
 */

get_header();
?>

<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 text-center">
				<h1 class="heading-primary heading-primary--main"><?php the_field( 'about_title' ); ?></h1>
			</div>
			<!-- Vertical Line -->
			<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
				<img class="img-responsive" src="<?php the_field( 'about_img_0' ); ?>" alt="Img">
			</div>
			<div class="col-sm-6">
				<p class="paragraph"><?php the_field( 'about_paragraph' ); ?></p>
				<a href="/kontakt" class="btn btn--hero-cta">Kontaktiraj</a>
			</div>
		</div>
	</div>
</section>

<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="heading-secondary u-margin-top-medium"><?php the_field( 'about_gallery_title' ); ?></h2><!--POGLEDAJ GALERIJU-->
			</div>
			<div class="col-xs-12">
				<div id="myCarousel2" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="row">
								<div class="col-xs-4">
									<img class="img-responsive" src="<?php the_field( 'about_img_1'); ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive" src="<?php the_field( 'about_img_2'); ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive" src="<?php the_field( 'about_img_3'); ?>" alt="Img">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xs-4">
									<img class="img-responsive" src="<?php the_field( 'about_img_4'); ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive" src="<?php the_field( 'about_img_5'); ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive" src="<?php the_field( 'about_img_6'); ?>" alt="Img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center">
				<a href="/galerija" class="btn u-margin-bottom-medium u-margin-top-medium">Vidi Još</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
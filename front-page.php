<?php
/**
 * Template Name: Front Page
 *
 *
 * @package textileart
 */

get_header();

/* Hero */

$homepage_hero_img = get_field( 'homepage_hero_img' );

if( have_rows('glavna_sekcija') ):
	while( have_rows('glavna_sekcija') ): the_row(); 
		$homepage_hero_heading_primary  = get_sub_field( 'homepage_hero_heading_primary' );
		$homepage_hero_paragraph_hero = get_sub_field( 'homepage_hero_paragraph_hero' );
	endwhile;
endif;

?>

<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<h1 class="heading-primary heading-primary--main"><?php echo $homepage_hero_heading_primary; ?></h1>
				<p class="paragraph paragraph--hero"><?php echo $homepage_hero_paragraph_hero; ?></p>
				<a href="/kontakt" class="btn btn--hero-cta">Kontakt</a>
			</div>
			<div class="col-xs-12 col-sm-6">
				<img class="img-responsive hero-image" src="<?php echo $homepage_hero_img['url']; ?>"
					alt="Hero slika salvador dali">
			</div>
		</div>
	</div>
</section>

<?php 
	// Gallery 

	if( have_rows('homepage_gallery') ):
		while( have_rows('homepage_gallery') ): the_row(); 
			$homepage_gallery_title = get_sub_field( 'homepage_gallery_title' );
			$homepage_gallery_img_1 = get_sub_field( 'homepage_gallery_img_1' );
			$homepage_gallery_img_2 = get_sub_field( 'homepage_gallery_img_2' );
			$homepage_gallery_img_3 = get_sub_field( 'homepage_gallery_img_3' );
			$homepage_gallery_img_4 = get_sub_field( 'homepage_gallery_img_4' );
			$homepage_gallery_img_5 = get_sub_field( 'homepage_gallery_img_5' );
			$homepage_gallery_img_6 = get_sub_field( 'homepage_gallery_img_6' );
		endwhile;
	endif;

?>
<section class="gallery-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="heading-secondary"><?php echo $homepage_gallery_title; ?></h2><!-- Galerija -->
			</div>
			<div class="col-xs-12">
				<!-- Desktop Caraousel -->
				<div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="row">
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_1['url']; ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_2['url']; ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_3['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_4['url']; ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_5['url']; ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_6['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<button class="btn btn--radius"><span class="fa fa-angle-left"></span></button>
						<span class="sr-only">Prethodna</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<button class="btn btn--radius"><span class="fa fa-angle-right"></span></button>
						<span class="sr-only">Sledeca</span>
					</a>
				</div> <!-- Desktop Caraousel Ends -->

				<!-- Mobile Caraousel -->
				<div id="myCarousel-mobile" class="carousel slide hidden-sm hidden-md hidden-lg" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="row">
								<div class="col-xs-8 col-xs-offset-2">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_1['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xs-8 col-xs-offset-2">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_2['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xs-8 col-xs-offset-2">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_3['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xs-8 col-xs-offset-2">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_4['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xs-8 col-xs-offset-2">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_5['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xs-8 col-xs-offset-2">
									<img class="img-responsive"
										src="<?php echo $homepage_gallery_img_6['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel-mobile" data-slide="prev">
						<button class="btn btn--radius"><span class="fa fa-angle-left"></span></button>
						<span class="sr-only">Prethodna</span>
					</a>
					<a class="right carousel-control" href="#myCarousel-mobile" data-slide="next">
						<button class="btn btn--radius"><span class="fa fa-angle-right"></span></button>
						<span class="sr-only">Sledeca</span>
					</a>
				</div> <!-- Mobile Caraousel Ends -->
			</div>
		</div>
	</div>
</section>

<?php 
	// Copy
	if( have_rows('homepage_copy') ):
		while( have_rows('homepage_copy') ): the_row(); 
			$homepage_copy_title = get_sub_field( 'homepage_copy_title' );
			$homepage_copy_copy = get_sub_field( 'homepage_copy_copy' );
			
		endwhile;
	endif;

	$homepage_copy_img = get_field( 'homepage_copy_img' );

?>

<section class="copy-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="heading-secondary"><?php echo $homepage_copy_title; ?></h2>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-1 golden u-margin-bottom-small">
				<?php echo $homepage_copy_copy; ?>

			</div>
			<div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0">
				<img class="img-responsive" src="<?php echo $homepage_copy_img['url']; ?>" alt="Image">
			</div>
		</div>
	</div>
</section>

<?php 

	// How it works
	if( have_rows('how_it_works_section_1') ):
		while( have_rows('how_it_works_section_1') ): the_row(); 
			$homepage_how_it_works_title = get_sub_field( 'homepage_how_it_works_title' );
			$homepage_how_it_works_img_1 = get_sub_field( 'homepage_how_it_works_img_1' );
			if( have_rows('step_1') ):
				while( have_rows('step_1') ): the_row(); 
					$homepage_how_it_works_1_title = get_sub_field( 'homepage_how_it_works_1_title' );
					$homepage_how_it_works_1_paragraph = get_sub_field( 'homepage_how_it_works_1_paragraph' );
				endwhile;
			endif;
		endwhile;
	endif;
	if( have_rows('how_it_works_section_2') ):
		while( have_rows('how_it_works_section_2') ): the_row(); 
			$homepage_how_it_works_img_2 = get_sub_field( 'homepage_how_it_works_img_2' );
			if( have_rows('step_2') ):
				while( have_rows('step_2') ): the_row(); 
					$homepage_how_it_works_2_title = get_sub_field( 'homepage_how_it_works_2_title' );
					$homepage_how_it_works_2_paragraph = get_sub_field( 'homepage_how_it_works_2_paragraph' );
				endwhile;
			endif;
		endwhile;
	endif;
	if( have_rows('how_it_works_section_3') ):
		while( have_rows('how_it_works_section_3') ): the_row(); 
			$homepage_how_it_works_img_3 = get_sub_field( 'homepage_how_it_works_img_3' );
			if( have_rows('step_3') ):
				while( have_rows('step_3') ): the_row(); 
					$homepage_how_it_works_3_title = get_sub_field( 'homepage_how_it_works_3_title' );
					$homepage_how_it_works_3_paragraph = get_sub_field( 'homepage_how_it_works_3_paragraph' );
				endwhile;
			endif;
		endwhile;
	endif;

?>

<!-- How It Works - Desktop -->
<section class="how-it-works-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="heading-secondary"><?php $homepage_how_it_works_title ?></h2> <!-- Proces -->
			</div>

			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1">
				<img src="<?php echo $homepage_how_it_works_img_1['url']; ?>" class="img-responsive"
					alt="Step 1">
			</div>

			<div class="col-xs-12 col-sm-5 col-sm-offset-1">
				<h3 class="heading-tertiary"><?php echo $homepage_how_it_works_1_title; ?></h3><!-- Prvi Korak -->
				<p class="paragraph"><?php echo $homepage_how_it_works_1_paragraph; ?></p><!-- Pošaljete nam sliku, napišete koji odevni predmet želite da bude oslikan tako što
					ćete popuniti formu sa linkom slike ili preko mejla sa attach opcijom. -->
			</div>


		</div>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-push-5 col-sm-offset-1">
				<img src="<?php echo $homepage_how_it_works_img_2['url']; ?>" class="img-responsive"
					alt="Step 2">
			</div>

			<div class="col-xs-12 col-sm-5 col-sm-pull-4">
				<h3 class="heading-tertiary"><?php echo $homepage_how_it_works_2_title; ?></h3><!-- Drugi Korak -->
				<p class="paragraph"><?php echo $homepage_how_it_works_2_paragraph; ?></p><!-- Postavljanje crteža i slikanje. U međuvremenu pravimo kolače i pazimo na pse da ne
					pojedu boju. -->
			</div>

		</div>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1">
				<img src="<?php echo $homepage_how_it_works_img_3['url']; ?>" class="img-responsive"
					alt="Step 3">
			</div>
			<div class="col-xs-12 col-sm-5 col-sm-offset-1">
				<h3 class="heading-tertiary"><?php echo $homepage_how_it_works_3_title; ?></h3><!-- Treći korak -->
				<p class="paragraph u-margin-bottom-small"><?php echo $homepage_how_it_works_3_paragraph; ?></p><!-- Rad je završen i spreman za pošiljku. Dogovorimo se kada vam odgovara slanje i vi
					dobijate vašu narudžbinu. -->
				<a href="/kontakt" class="btn btn--hero-cta">Naruči</a>
			</div>
		</div>
	</div>
</section><!-- How It Works Desktop Ends -->

<?php

	// Bot section
	if( have_rows('homepage_bot_gallery') ):
		while( have_rows('homepage_bot_gallery') ): the_row(); 
			$homepage_bot_section_title = get_sub_field( 'homepage_bot_section_title' );
			$homepage_bot_section_img_1 = get_sub_field( 'homepage_bot_section_img_1' );
			$homepage_bot_section_img_2 = get_sub_field( 'homepage_bot_section_img_2' );
			$homepage_bot_section_img_3 = get_sub_field( 'homepage_bot_section_img_3' );
			$homepage_bot_section_img_4 = get_sub_field( 'homepage_bot_section_img_4' );
			$homepage_bot_section_img_5 = get_sub_field( 'homepage_bot_section_img_5' );
			$homepage_bot_section_img_6 = get_sub_field( 'homepage_bot_section_img_6' );
		endwhile;
	endif;

?>

<section class="gallery-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="heading-secondary"><?php echo $homepage_bot_section_title; ?></h2><!-- Pogledajte kolekciju -->
			</div>
			<div class="col-12">
				<div id="myCarousel2" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="row">
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_bot_section_img_1['url']; ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_bot_section_img_2['url']; ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_bot_section_img_3['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_bot_section_img_4['url']; ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_bot_section_img_5['url']; ?>" alt="Img">
								</div>
								<div class="col-xs-4">
									<img class="img-responsive"
										src="<?php echo $homepage_bot_section_img_6['url']; ?>" alt="Img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center">
				<a href="/galerija" class="btn btn--hero-cta btn-bot">Vidi Još</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
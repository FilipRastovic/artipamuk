<?php
/**
 * Template Name: Contact Page
 *
 *
 * @package textileart
 */

get_header();
?>

<section class="contact">
    <div class="container">
        <div class="row text-center">
            <h1 class="heading-primary heading-primary--main">Kontakt</h1>
            <div class="col-sm-7 contact-images-decoration col-md-7 hidden-xs hidden-sm">
                <img class="img-responsive" src="<?php the_field( 'contact_img_1' ); ?>" alt="Slika">
                <img class="img-responsive kon-2" src="<?php the_field( 'contact_img_2' ); ?>" alt="Slika">
                <img class="img-responsive kon-3" src="<?php the_field( 'contact_img_3' ); ?>" alt="Slika">
            </div>
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-1">
                <h4 class="golden">Kontakt</h4>
                <p class="smaller-contact-heading">Odgovoricemo vam u najkracem roku</p>
                <p class="larger-contact-heading">Hvala</p>
                <form action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=0b0ff9bd54" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form validate" target="_blank" novalidate>
                
                    <p id="demo" class="paragraph highlight u-bold discount"></p>
                    <label class="sr-only" for="mce-FNAME">Ime i Prezime</label>
                    <input type="text" value="" name="FNAME" class="form-control" placeholder="Ime i Prezime" id="mce-FNAME" data-toggle="tooltip-1" data-placement="top" title="Full Name">
                    <label class="sr-only" for="mce-EMAIL">Email </label>
                    <input type="email" value="" name="EMAIL" placeholder="Email" class="required form-control email" id="mce-EMAIL" data-toggle="tooltip-2" data-placement="top" title="Email Address">
                    <label class="sr-only" for="mce-LNAME">Link vaše odabrane slike ili fotografije</label>
                    <input type="text" value="" name="LNAME" class="form-control" placeholder="Link vaše odabrane slike ili fotografije" id="mce-LNAME" data-toggle="tooltip-3" data-placement="top" title="Link to your website or landing page">
                    <label class="sr-only" for="mce-MMERGE5">Kratko objašnjenje onoga što želite </label>
                    <textarea rows="6" type="text" value="" name="MMERGE5" class="form-control" id="mce-MMERGE5" placeholder="Kratko objašnjenje onoga što želite" data-toggle="tooltip-4" data-placement="top" title="Short Project Description"></textarea>
                    <input type="submit" value="Kontaktirajte nas" name="subscribe" id="mc-embedded-subscribe" class="btn form-button">
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


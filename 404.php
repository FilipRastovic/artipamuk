<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package textileart
 */

get_header();
?>

<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 mx-auto">
				<h1 class="heading-primary heading-primary--main"><?php _e( 'Ova strana ne postoji :)', 'textileart'); ?></h1>

		</div>
	</div>
</section>

<?php
get_footer();

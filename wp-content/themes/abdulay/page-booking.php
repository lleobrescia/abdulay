<?php
/**
 * Template Name: Booking
 *
 * The template for displaying booking content
 *
 * This is the template that displays booking content by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abdulay
 */

get_header();
?>

	<div id="primary" class="content-area booking">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <header class="entry-header">
            <h1 class="entry-title entry-title--has-bg">
              <span>
                <?= __('Agende sua <br> Consulta', 'abdulay'); ?>

              </span>
            </h1>
          </header><!-- .entry-header -->
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->

		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
      the_post();
    ?>
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-lg-2">
              <?php the_content(); ?>
            </div><!-- col-md-8  -->
          </div><!-- row -->
        </div><!-- container -->

    <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

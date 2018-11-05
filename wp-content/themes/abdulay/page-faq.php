<?php
/**
 * Template Name: FAQ
 *
 *
 * The template for displaying faq content
 *
 * This is the template that displays all pages by default.
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

	<div id="primary" class="content-area faq">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <header class="entry-header">
            <h1 class="entry-title entry-title--has-bg entry-title--has-line">
              <span>
              Perguntas <br>
              Frequentes
              </span>
            </h1>
          </header><!-- .entry-header -->
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->

		<main id="main" class="site-main">
      <div class="container">
        <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <?php
            // WP_Query arguments
            $argsFaq = array(
              'posts_per_page' => '-1',
              'post_type'      => 'faq'
            );

            // The Query
            $faq = new WP_Query( $argsFaq );

            while ( $faq->have_posts() ) :
              $faq->the_post();

              get_template_part( 'template-parts/content', 'faq' );

            endwhile; // End of the loop.
          ?>
          </div><!-- col-lg-8 -->
        </div> <!-- row -->
      </div><!-- container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

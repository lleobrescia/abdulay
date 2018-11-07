<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abdulay
 */

get_header();
?>


	<div id="primary" class="content-area home">
    <section class="home-slider">
    </section><!-- home-slider -->
		<main id="main" class="site-main">
      <section class="home-sobre">
      </section><!-- home-sobre -->
      <section class="home-proc">
      </section><!-- home-proc -->
		</main><!-- #main -->

    <section class="home-depo">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="home-depo__container">
              <h3 class="entry-title">
                <span>
                  Depoimentos
                </span>
              </h3>

              <ul class="bxslider--depo slide-depo">
                <?php
                  // check if the repeater field has rows of data
                  if( have_rows('depoimentos') ):
                    // loop through the rows of data
                    while ( have_rows('depoimentos') ) : the_row();
                ?>
                  <li class="home-depo__single">
                    <div>
                      <?php the_sub_field('texto'); ?>

                      <div class="slide-depo__nome">
                        <hr>
                        <h4><?php the_sub_field('nome'); ?>,</h4>
                        <span><?php the_sub_field('relationamento'); ?></span>
                      </div><!-- slide-depo__nome -->
                    </div>
                  </li>

                <?php
                    endwhile;
                  else :
                      // no rows found
                  endif;
                ?>
              </ul>
            </div><!-- home-depo__container -->
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- home-depo -->

    <section class="home-loca">
    </section><!-- home-loca -->
	</div><!-- #primary -->

<script>
  jQuery(document).ready(function(){
    jQuery('.bxslider--depo').bxSlider({
      pager: false,
      auto: true
    });
  });
</script>
<?php
get_footer();

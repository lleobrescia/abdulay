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
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-2">
              <h2 class="entry-title entry-title--has-bg">
                <span>
                Conheça os nossos <br> procedimentos
                </span>
              </h2>
            </div><!-- col-md-10 -->
          </div><!-- row -->

          <section class="row">
            <?php
            $rosto     = get_field('procedimento_rosto');
            $corpo     = get_field('procedimento_corpo');
            $mama      = get_field('procedimento_mama');
            $esteticos = get_field('procedimento_esteticos');
            ?>
            <section class="col-md-3" >
              <div class="home-proc__single" style="background: url('<?= $rosto['url']; ?>')">
                <h4 class="home-proc__title">
                  ROSTO
                </h4>

                <footer class="home-proc__footer">
                  <hr>
                  <a href="" title="Saiba mais">Saiba mais &gt;</a>
                </footer><!-- home-proc__footer -->
              </div><!-- home-proc__single -->
            </section><!-- col-md-3 -->
            <section class="col-md-3" >
              <div class="home-proc__single" style="background: url('<?= $corpo['url']; ?>')">
                <h4 class="home-proc__title">
                  CORPO
                </h4>
                <footer class="home-proc__footer">
                  <hr>
                  <a href="" title="Saiba mais">Saiba mais &gt;</a>
                </footer><!-- home-proc__footer -->
              </div><!-- home-proc__single -->
            </section><!-- col-md-3 -->
            <section class="col-md-3" >
             <div class="home-proc__single" style="background: url('<?= $mama['url']; ?>')">
                <h4 class="home-proc__title">
                  MAMA
                </h4>
                <footer class="home-proc__footer">
                  <hr>
                  <a href="" title="Saiba mais">Saiba mais &gt;</a>
                </footer><!-- home-proc__footer -->
              </div><!-- home-proc__single -->
            </section><!-- col-md-3 -->
            <section class="col-md-3" >
             <div class="home-proc__single" style="background: url('<?= $esteticos['url']; ?>')">
              <h4 class="home-proc__title">
                  ESTÉTICOS
                </h4>
                <footer class="home-proc__footer">
                  <hr>
                  <a href="" title="Saiba mais">Saiba mais &gt;</a>
                </footer><!-- home-proc__footer -->
              </div><!-- home-proc__single -->
            </section><!-- col-md-3 -->
          </div><!-- row -->
        </div><!-- container -->
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

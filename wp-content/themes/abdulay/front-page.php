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


  <div id="primary" class="content-area">
    <section class="home-slider">
      <div class="home-slider__container">
        <ul class="bxslider--slide">
      <?php
          // check if the repeater field has rows of data
          if( have_rows('slide') ):
            // loop through the rows of data
            while ( have_rows('slide') ) : the_row();
        ?>
        <li>
          <div class="home-slider__text">
            <div>
              <h2 class="entry-title"><?php the_sub_field('titulo'); ?></h2>
              <hr>
              <?php the_sub_field('texto'); ?>
            </div>
          </div>
          <img src="<?= get_sub_field('imagem')['url']; ?>" alt="">
        </li>
         <?php
            endwhile;
          else :
              // no rows found
          endif;
        ?>
         </ul>
      </div><!-- home-slider__container -->
      <div style="clear:both"></div>
    </section><!-- home-slider -->

    <main id="main" class="site-main">

      <section class="home-sobre">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-lg-4 offset-lg-1 d-none d-md-block">
              <img src="<?= get_template_directory_uri() ?>/images/foto-home.png" alt="Dra. Abdulay Eziquiel">
            </div><!-- col-md-5 -->
            <div class="col-md-7 col-lg-6 home-sobre__text">
              <h2 class="entry-title">
                <span>
                 Sobre mim
                </span>
              </h2>
              <?php the_field('sobre_mim'); ?>

              <div class="home-sobre__nome">
                <hr>
                <p>
                  Cirurgiã Plástica Estética e Reparadora <br> Membro da Sociedade Brasileira de Cirugia Plástica

                </p>
              </div><!-- home-sobre__nome -->
            </div><!-- col-md-7 -->

          </div><!-- row -->
        </div><!-- container -->
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
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-lg-4 oofest-lg-1">
            <h3 class="entry-title entry-title--has-bg">
              <span>
                Localização e <br> atendimento
              </span>
            </h3>

            <div class="home-loca__end">
            <?php the_field("localização_e_atendimento"); ?>
            </div><!-- home-loca__end -->

            <div class="home-loca__address">
              <h4>Rio de Janeiro</h4>
                <address>
                <?= get_field('endereço', 'option'); ?>
                </address>
            </div>
          </div><!-- col-md-5 -->

          <div class="col-md-6 col-lg-5 offset-lg-1 home-loca__map">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="476" height="526" id="gmap_canvas" src="https://maps.google.com/maps?q=Av.%20Ataulfo%20de%20Paiva%2C%20135&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{text-align:right;height:526px;width:476px;}.gmap_canvas {overflow:hidden;background:none!important;height:526px;width:476px;}</style></div>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- home-loca -->
  </div><!-- #primary -->

<script>
  jQuery(document).ready(function(){
    jQuery('.bxslider--depo').bxSlider({
      pager: false,
      auto: true
    });
  });
  jQuery(document).ready(function(){
    jQuery('.bxslider--slide').bxSlider({
      pager: false,
      auto: true,
      nextText: " ",
      prevText: " "
    });
  });
</script>
<?php
get_footer();

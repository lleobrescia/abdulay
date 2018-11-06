<?php
/**
 * Template Name: Procedimento Rosto
 *
 * The template for displaying procedimento content
 *
 * This is the template that displays procedimento content by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abdulay
 */

get_header();

function tirarAcentos($string){
   $string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(Ç|ç)/"),explode(" ","a A e E i I o O u U n N C c"),$string);

   return preg_replace('/\s+/', '', $string);
}
?>

	<div id="primary" class="content-area proc" ng-controller="ProcController as proc">
		<main id="main" class="site-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-1">
            <header class="entry-header">
              <h1 class="entry-title ">
                <span>
                Procedimentos <br>
                para o rosto
                </span>
              </h1>
            </header><!-- .entry-header -->
            <?php
              // WP_Query arguments
              $argsProc = array(
                'posts_per_page' => '-1',
                'category_name'  => 'rosto',
                'post_type'      => 'procedimento'
              );

              // The Query
              $proc = new WP_Query( $argsProc );
              $default = null;
            ?>
            <div class="proc__select">
              <select ng-model="proc.filter" name="" id="">
            <?php while ( $proc->have_posts() ) :  $proc->the_post();
              if($default == null) $default =tirarAcentos(get_the_title());
            ?>

            <option  value="<?= tirarAcentos(get_the_title());?>">
              <?php the_title(); ?>
            </option>

            <?php endwhile; // End of the loop. ?>
              </select>
            </div><!-- proc__select -->

            <section class="proc__content">
              <?php while ( $proc->have_posts() ) :  $proc->the_post();  ?>
                <div class="proc__single" ng-if="proc.filter === '<?= tirarAcentos(get_the_title());?>'">
                  <?php the_content(); ?>
                </div>
              <?php endwhile; // End of the loop. ?>

            </section><!-- proc__content -->
          </div><!-- col -->
          <?php wp_reset_query(); ?>
          <div class="col-md-6 offset-lg-1 p-0 d-none d-lg-block">
            <?php $image = get_field('imagem'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

            <div class="see-more">
              <h4>veja também</h4>
              <a href="">Procedimentos para o Corpo  &gt;</a>
            </div><!-- see-more -->
          </div> <!-- col-md-6 -->
        </div><!-- row -->

        <section class="chamada row">
          <div class="col-md-7 p-0">
            <h2 class="chamada__title">
              Agende sua consulta!
            </h2>
          </div><!-- col-md-7 -->
          <div class="col-md-4 col-lg-3  offset-md-1 chamada__info">
          <p>
            Decidiu por algum procedimento ou ainda está em dúvida?
          </p>

            <p>Conheça nosso espaço e converse comigo para obter mais informações!</p>

            <a href="" class="chamada__button btn btn-outline-primary">
              clique aqui para agendar uma data
            </a>
          </div><!-- col-md-4  -->
        </section><!-- chamada -->

        <section class="row citacao">
          <div class="col-md-7 p-0">
            <h3 class="citacao__title">
              <?php the_field('titulo', 'option'); ?>
            </h3>
            <div class="citacao__text">
              <?php the_field('citacao', 'option'); ?>
            </div><!-- citacao__text -->
          </div><!-- col-md-7 -->
          <div class="col-md-5 p-0">
            <img class="citacao__photo" src="<?= get_template_directory_uri()  ?>/images/foto.png" alt="">
          </div><!-- col-md-5" -->
        </section><!-- citacao -->
      </div><!-- container -->
		</main><!-- #main -->
	</div><!-- #primary -->


<script>
  (function () {
  'use strict';

  angular.module('app', []); // Startup

    angular
    .module('app')
    .controller('ProcController', ProcController);

  function ProcController($window) {
    var vm     = this;
    vm.filter  = '<?= $default ?>';
  }
})();
</script>
<?php
get_footer();

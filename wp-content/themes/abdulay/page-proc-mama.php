<?php
/**
 * Template Name: Procedimento Mama
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script>
	<div id="primary" class="content-area proc" ng-controller="ProcController as proc">
		<main id="main" class="site-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-1">
            <header class="entry-header">
              <h1 class="entry-title ">
                <span>
                <?= __('Procedimentos <br> para a mama', 'abdulay'); ?>

                </span>
              </h1>
            </header><!-- .entry-header -->
            <?php
              // WP_Query arguments
              $argsProc = array(
                'posts_per_page' => '-1',
                'category_name'  => 'mama',
                'post_type'      => 'procedimento'
              );

              // The Query
              $proc = new WP_Query( $argsProc );
            ?>
            <div class="proc__select">
              <select ng-model="proc.filter" name="" id="">
                <option value="">Escolha um Procedimento</option>
            <?php while ( $proc->have_posts() ) :  $proc->the_post();?>

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
          <?php while ( $proc->have_posts() ) :  $proc->the_post();  ?>
              <?php $image = get_field('imagem', get_the_ID()); ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" ng-if="proc.filter === '<?= tirarAcentos(get_the_title());?>'" >
            <?php endwhile; // End of the loop. ?>

            <div class="see-more">
              <h4><?= __('veja também', 'abdulay'); ?></h4>
              <a href="<?= get_site_url(null, '/procedimentos-para-o-rosto/'); ?>"><?= __('Procedimentos para o rosto &gt;', 'abdulay'); ?></a>
                <a href="<?= get_site_url(null, '/procedimentos-para-o-corpo/'); ?>"><?= __('Procedimentos para o corpo &gt;', 'abdulay'); ?></a>
                <a href="<?= get_site_url(null, '/procedimentos-esteticos/'); ?>"><?= __('Procedimentos estéticos &gt;', 'abdulay'); ?></a>
            </div><!-- see-more -->
          </div> <!-- col-md-6 -->
        </div><!-- row -->

        <section class="chamada row ">
          <div class="col-md-7 p-0">
            <h2 class="chamada__title">
            <?= __('Agende sua consulta!', 'abdulay'); ?>

            </h2>
            <a class="chamada__title-link" href="<?= get_site_url(null, '/agende-sua-consulta/'); ?>" title="<?= __('Agende sua consulta!', 'abdulay'); ?>"></a>
          </div><!-- col-md-7 -->
          <div class="col-md-4 col-lg-3  offset-md-1 chamada__info mb-5 md-md-0">
          <p>
          <?= __('Decidiu por algum procedimento ou ainda está em dúvida?', 'abdulay'); ?>

          </p>

            <p>
            <?= __('Conheça nosso espaço e converse comigo para obter mais informações!', 'abdulay'); ?>
            </p>

            <a href="<?= get_site_url(null, '/agende-sua-consulta/'); ?>" class="chamada__button btn btn-outline-primary">
            <?= __('clique aqui para agendar uma data', 'abdulay'); ?>

            </a>
          </div><!-- col-md-4  -->
        </section><!-- chamada -->

        <section class="row citacao d-none d-lg-flex">
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
    vm.filter  = '';
  }
})();
</script>
<?php
get_footer();

<?php
/**
 * Template part for displaying faq content in page-faq.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abdulay
 */

?>

<section id="faq-<?php the_ID(); ?>" <?php post_class(); ?>>
  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php the_ID(); ?>">
    <?php the_title( '<h3 class="faq__title">', '</h3>' ); ?>
  </button>
  <div id="collapse<?php the_ID(); ?>" class="collapse show" aria-labelledby="heading<?php the_ID(); ?>" >
    <div class="faq__content">
      <?php the_field('digite_a_resposta'); ?>
    </div><!-- faq__content -->
  </div>

</section><!-- #post-<?php the_ID(); ?> -->

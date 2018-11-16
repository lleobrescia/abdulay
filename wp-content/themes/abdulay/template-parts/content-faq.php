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
<?php the_title( '<h3 class="faq__title">', '</h3>' ); ?>
  <div class="faq__content">
    <?php the_field('digite_a_resposta'); ?>
  </div><!-- faq__content -->
</section><!-- #post-<?php the_ID(); ?> -->

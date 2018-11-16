<?php
/**
 * Template Name: About
 *
 * The template for displaying about content
 *
 * This is the template that displays about content by default.
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

	<div id="primary" class="content-area about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <header class="entry-header">
            <h1 class="entry-title entry-title--has-bg entry-title--has-line">
              <span>
                <?= __('Sobre mim', 'abdulay'); ?>

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
            <div class="col-md-5 offset-lg-2">
              <?php the_content(); ?>
            </div><!-- col-md-8  -->

            <div class="col-md-5 about__photo">
            <?php $image = get_field('imagem'); ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
              </div>
          </div><!-- row -->
        </div><!-- container -->

    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->

    <section class="consultorio container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <header class="entry-header">
            <h1 class="entry-title entry-title--has-bg entry-title--has-line">
              <span>
                <?= __('O Consultório', 'abdulay'); ?>

              </span>
            </h1>
          </header><!-- .entry-header -->
        </div><!-- col -->
      </div><!-- row -->

      <div class="row">
        <div class="col-md-10 offset-lg-2">
          <?php
          $images = get_field('consultorio');
          if( $images ): ?>
            <ul class="bxslider">
              <?php foreach( $images as $image ): ?>
                <li>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div><!-- col-md-10 -->
      </div><!-- row -->
    </section>
	</div><!-- #primary -->

<script>
  jQuery(document).ready(function(){
    jQuery('.bxslider').bxSlider({
      pager: false,
      auto: true
    });
  });
</script>
<?php
get_footer();

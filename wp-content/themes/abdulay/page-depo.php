<?php
/**
 * Template Name: Depoimento
 *
 * The template for displaying contact content
 *
 * This is the template that displays contact content.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abdulay
 */

get_header();
$tel_fixo    = get_field('telefone_fixo', 'option');
$tel_celular = get_field('telefone_celular', 'option');
$instagram   = get_field('instagram', 'option');
$facebook    = get_field('facebook', 'option');
$whatsapp    = get_field('link_whatsapp', 'option');
$email       = get_field('e-mail', 'option');
$end         = get_field('endereço', 'option');
?>

	<div id="primary" class="content-area contact">
		<main id="main" class="site-main mb-5">

      <div class="container">
        <div class="row">
          <div class="col-lg-9 offset-lg-2">
            <div class="row">
              <section class="col-md-7 col-lg-6">
                <header class="entry-header">
                  <h1 class="entry-title entry-title--has-bg entry-title--has-line">
                    <span>
                      Envie seu depoimento!

                    </span>
                  </h1>
                </header><!-- .entry-header -->
              </section>

              <section class="col-md-5 col-lg-6">
                <div class="contact-form">
                <?php echo do_shortcode( '[contact-form-7 id="356" title="Depo form"]' ); ?>
                </div><!-- contact-form -->
              </section>
            </div>
          </div><!-- col-lg-8 -->
        </div><!-- row -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

<?php
/**
 * Template Name: Contact
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
		<main id="main" class="site-main">

      <div class="container">
        <div class="row">
          <div class="col-lg-9 offset-lg-2">
            <div class="row">
              <section class="col-md-7 col-lg-6">
                <header class="entry-header">
                  <h1 class="entry-title entry-title--has-bg entry-title--has-line">
                    <span>
                    Dúvidas? <br>
                    Entre em contato!
                    </span>
                  </h1>
                  <div class="contact-info">
                    <?= $tel_fixo; ?> | <?= $tel_celular; ?> <i class="fa fa-whatsapp" aria-hidden="true"></i><br>
                    <?= $email; ?> <br>
                    <div class="contact-info__social">
                      <a href="<?= $facebook; ?>" title="Abdulay Eziquiel Facebook" rel="external" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/images/icon-face_hover.png" alt="">
                      </a>
                      <a href="<?= $instagram; ?>" title="Abdulay Eziquiel Instagram" rel="external" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/images/icon-instagram-hover.png" alt="">
                      </a>
                      <a href="<?= $whatsapp; ?>" title="Abdulay Eziquiel Whatsapp" rel="external" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/images/icon-whatsapp_hover.png" alt="">
                      </a>
                    </div><!-- contact-info__social -->
                  </div><!-- contact-info -->
                </header><!-- .entry-header -->
              </section>

              <section class="col-md-5 col-lg-6">
                <div class="contact-form">
                <?php echo do_shortcode( '[contact-form-7 id="35" title="Contact form"]' ); ?>
                </div><!-- contact-form -->
              </section>
            </div>
          </div><!-- col-lg-8 -->
        </div><!-- row -->

        <div class="row">
          <div class="col-lg-10 offset-lg-2">
            <section class="contact-map">
              <div class="contact-map__title-box">
                <h2>Nossa <br> localização</h2>
                <?php the_field('descrição'); ?>
                <h3>Rio de Janeiro</h3>
                <address class="contact-map__title-box_end">
                <?= $end; ?>
                </address>
              </div>
            </section><!-- contact-map -->
          </div>
        </div><!-- row -->
      </div><!-- container -->

      <div class="contact__map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.084699137286!2d-43.219469585633064!3d-22.983912684972587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd5abe396f74d%3A0x1c374d6b338a6024!2sAv.+Ataulfo+de+Paiva%2C+135+-+Leblon%2C+Rio+de+Janeiro+-+RJ%2C+22440-033!5e0!3m2!1spt-BR!2sbr!4v1541639913133" width="1412" height="720" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div><!-- contact__map -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

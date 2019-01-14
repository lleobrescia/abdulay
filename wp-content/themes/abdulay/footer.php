<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abdulay
 */

$tel_fixo    = get_field('telefone_fixo', 'option');
$tel_celular = get_field('telefone_celular', 'option');
$instagram   = get_field('instagram', 'option');
$facebook    = get_field('facebook', 'option');
$twitter     = get_field('link_do_twitter', 'option');
$linkedin    = get_field('link_do_linkedin', 'option');
$whatsapp    = get_field('link_whatsapp', 'option');
$email       = get_field('e-mail', 'option');
$end         = get_field('endereço', 'option');
$lattes      = get_field('lattes', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
      <div class="row">
        <section class="col-lg-10 footer offset-lg-1">
          <dir class="row row--footer">
            <section class="col-sm-4 col-lg-3 offset-lg-1 p-0">
              <a href="<?= get_site_url(null, '/agende-sua-consulta/'); ?>" class="footer__chamada">
              <?= __('Agende sua <br>
                consulta aqui &gt;', 'abdulay'); ?>
              </a>
            </section><!-- col-sm-3 -->

            <section class="col-sm-5 offset-sm-1 footer__contato p-0">
              <br class="d-block d-md-none">
              <h3>
              <?= __('contato e atendimento', 'abdulay'); ?>
              </h3>

              <div class="row">
                <div class="col-lg-5">
                  <?= $tel_fixo; ?> <br>
                  <?= $tel_celular; ?> <i class="fa fa-whatsapp" aria-hidden="true"></i><br>
                  <?= $email; ?> <br>
                </div><!-- col-lg-5 -->
                <div class="col-lg-7">
                  <br class="d-lg-none">
                  <?= $end; ?>
                </div><!-- col-lg-7 -->
              </div><!-- row -->
            </section><!-- col-sm-4 -->

            <section class="footer__social">
              <br class="d-block d-md-none">
              <div class="footer__social-single">
                <a href="<?= $facebook; ?>" title="<?= get_bloginfo('name');?> Facebook" rel="external" target="_blank">
                  <img src="<?= get_template_directory_uri(); ?>/images/icon-face.png" alt="">
                </a>
                <a href="<?= $instagram; ?>" title="<?= get_bloginfo('name');?> Instagram" rel="external" target="_blank">
                  <img src="<?= get_template_directory_uri(); ?>/images/icon-instagram.png" alt="">
                </a>
                <a href="<?= $whatsapp; ?>" title="<?= get_bloginfo('name');?> Whatsapp" rel="external" target="_blank">
                  <img src="<?= get_template_directory_uri(); ?>/images/icon-wathsapp.png" alt="">
                </a>
              </div>
              <div class="footer__social-single">
                <a href="<?= $twitter; ?>" title="<?= get_bloginfo('name');?> Twitter" rel="external" target="_blank">
                  <img src="<?= get_template_directory_uri(); ?>/images/icon-twitter.png" alt="">
                </a>
                <a href="<?= $lattes; ?>" title="<?= get_bloginfo('name');?> Lattes" rel="external" target="_blank">
                  <img src="<?= get_template_directory_uri(); ?>/images/icon-lattes.png" alt="">
                </a>
                <a href="<?= $linkedin; ?>" title="<?= get_bloginfo('name');?> LinkedIn" rel="external" target="_blank">
                  <img src="<?= get_template_directory_uri(); ?>/images/icon-linkedin.png" alt="">
                </a>
              </div>
            </section><!-- footer__social -->
          </dir><!-- row -->

          <div class="row footer__bottom">
            <div class="col-lg-10 offset-lg-1">
              &copy
              <?= date("Y"); ?>
              | <?= get_bloginfo('name');?>

              <a href="https://sitedacasa.com/" rel="external" target="_blank">
                casa2 design
              </a>
            </div>
          </div>
        </section><!-- footer -->
      </div><!-- row -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

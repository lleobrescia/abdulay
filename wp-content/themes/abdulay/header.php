<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abdulay
 */

?>
<!doctype html>
<!--[if IE 7]>
<html class="ie ie7 no-js" <?php language_attributes(); ?> >
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" <?php language_attributes(); ?> >
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html class="no-js"  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ng-app="app">
<div id="page" class="site">
	<header id="masthead" class="site-header">
    <?php
      $tel_fixo = get_field('telefone_fixo', 'option');
      $tel_celular = get_field('telefone_celular', 'option');
      $instagram = get_field('instagram', 'option');
      $facebook = get_field('facebook', 'option');
      $whatsapp = get_field('link_whatsapp', 'option');
      $email = get_field('e-mail', 'option');
    ?>
    <div class="site-header__top">
      <div class="container">
        <p><?= $tel_fixo; ?></p>
          <p>
            <span>|</span>  <?= $tel_celular; ?>
          <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </p>
        <p><span>|</span>  <?= $email; ?></p>
        <div class="social-top">
          <a class="social-top__link" href="<?= $instagram; ?>" target="_blank" rel="external" title="Abdulay Eziquiel Instagram">
            <img src="<?= get_template_directory_uri(); ?>/images/icon-instagram.png" alt=""
            onmouseover="this.src='<?= get_template_directory_uri(); ?>/images/icon-instagram-hover.png'"
            onmouseout="this.src='<?= get_template_directory_uri(); ?>/images/icon-instagram.png'">
          </a>
          <a class="social-top__link" href="<?= $facebook; ?>" target="_blank" rel="external" title="Abdulay Eziquiel Facebook">
            <img src="<?= get_template_directory_uri(); ?>/images/icon-face.png" alt=""
            onmouseover="this.src='<?= get_template_directory_uri(); ?>/images/icon-face_hover.png'"
            onmouseout="this.src='<?= get_template_directory_uri(); ?>/images/icon-face.png'">
          </a>
          <a class="social-top__link" href="<?= $whatsapp; ?>" target="_blank" rel="external" title="Abdulay Eziquiel Whatsapp">
            <img src="<?= get_template_directory_uri(); ?>/images/icon-wathsapp.png" alt=""
            onmouseover="this.src='<?= get_template_directory_uri(); ?>/images/icon-whatsapp_hover.png'"
            onmouseout="this.src='<?= get_template_directory_uri(); ?>/images/icon-wathsapp.png'">
          </a>
        </div><!-- social-top -->
      </div><!-- container-fluid -->
    </div><!-- site-header__top -->
    <nav id="site-navigation" class="navbar-abdulay navbar navbar-expand-md ">
      <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image($custom_logo_id, 'full');
      ?>
      <div class="container ">
        <a class="navbar-brand" href="<?=  home_url(); ?>" rel="home" title="<?= get_bloginfo('name'); ?>">
          <?= $logo; ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown dropdown--hover">
              <a class="nav-link" href="#" >
                <span>
                <?= __('Procedimentos', 'abdulay'); ?>

                <div class="underline"></div>
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu--hover" aria-labelledby="navbarDropdown">
              <?php
              $args = array(
                'post_type' => 'page',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order'   => 'ASC',
                'meta_query' => array(
                  array(
                    'key' => '_wp_page_template',
                    'value' => 'page-proc.php'
                  )
                )
              );
              $the_pages = new WP_Query( $args );

              if( $the_pages->have_posts() ):
                while( $the_pages->have_posts() ):
                  $the_pages->the_post();
              ?>
              <a class="dropdown-item" href="<?= get_permalink() ?>">
                <?= get_field('nome_no_menu', get_the_ID()); ?>
              </a>
              <?php
                  endwhile;
              endif;
              wp_reset_postdata();
              ?>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= get_site_url(null, '/perguntas-frequentes/'); ?>">
                <span>
                <?= __('Perguntas Frequentes', 'abdulay'); ?>
                <div class="underline"></div>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= get_site_url(null, '/sobre/'); ?>">
                <span>
                <?= __('Sobre', 'abdulay'); ?>

                <div class="underline"></div>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://blog.draabdulay.com" >
                <span>
                <?= __('Blog', 'abdulay'); ?>

                <div class="underline"></div>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= get_site_url(null, '/contato/'); ?>">
                <span>
                <?= __('Contato', 'abdulay'); ?>

                <div class="underline"></div>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= get_site_url(null, '/agende-sua-consulta/'); ?>">
                <span>
                <?= __('Agende sua Consulta', 'abdulay'); ?>

                <div class="underline"></div>
                </span>
              </a>
            </li>
          </ul>
        </div> <!-- collapse -->
      </div><!-- container -->

    </nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

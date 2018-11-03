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
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
      <p><?= $tel_fixo; ?></p>
      <p>
        <span>|</span>  <?= $tel_celular; ?>
      <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </p>
      <p><span>|</span>  <?= $email; ?></p>
      <div class="social-top">
        <a class="social-top__link" href="<?= $instagram; ?>" target="_blank" rel="external" title="Abdulay Eziquiel Instagram">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a class="social-top__link" href="<?= $facebook; ?>" target="_blank" rel="external" title="Abdulay Eziquiel Facebook">
          <i class="fa fa-facebook-square" aria-hidden="true"></i>
        </a>
        <a class="social-top__link" href="<?= $whatsapp; ?>" target="_blank" rel="external" title="Abdulay Eziquiel Whatsapp">
          <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </a>
      </div>
    </div>
		<nav id="site-navigation" class="main-navigation">

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

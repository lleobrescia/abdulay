<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package abdulay
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row">

			<section class="error-404 not-found col mb-5 text-center">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Opa! Essa página não pode ser encontrada.', 'abdulay' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Parece que nada foi encontrado neste local.', 'abdulay' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ztgroup-theme
 */

get_header();
?>

	<main id="primary-404" class="site-main">

		<section class="error-404-not-found">
			
			<div class="error-404-wrapper">
				<div class="error-item error-404-images">
					<?php 
					the_custom_logo();
					?>
				</div>
				<div class="error-item error-404-content">
				<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Ops! Essa página não pode ser encontrada.', 'ztgroup-theme' ); ?></h1>
			</header><!-- .page-header -->
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ztgroup-theme' ); ?></p>
						<div class="search-content">

						<?php
						get_search_form();
	
						
						?>
						</div>
	
						
	
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

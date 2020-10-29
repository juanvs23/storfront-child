<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
		//	do_action( 'homepage' );



			
			?>
<div id="kit-home" class="">
<h2 class="kit-home-title">Kits para o seu bebê<span class="line"></span></h2>
<div id="kit-home-slider" class="splide">
	<div class="splide__track">
		<ul class="splide__list products">
			<?php
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => 12
					);
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
						wc_get_template_part( 'content', 'product' );
					endwhile;
				} else {
					echo __( 'No products found' );
				}
				wp_reset_postdata();
			?>
		</ul><!–/.products–>
	</div>
</div>
</div>
			
<section class="call-to-action">
<h2 >Porque nós amamos nossos e seus bebês</h2>

		<div class="call-to-action-description">
			<p>Entendemos o que você precisa. Você quer produtos seguros, com propósito, suaves e puros. Você quer conveniência, flexibilidade e seleção apropriada para cada fase.</p>
<p>Quando o assunto é o melhor para seu bebê, tudo oferecido e o que defendemos e tão puro quanto o mundo que você deseja.</p>

		</div>
		<div class="call-to-action-button">
	<button class="btn-default btn-color-primary" onclick="location.href = '//ebabyhome.com.br/product-category/kits/';">Escolha seu kit agora</button>	
</div>
	
</section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();

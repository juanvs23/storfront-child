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
<?php





global $post;
$args = array( 'taxonomy' => 'product_cat',);
$terms = wp_get_post_terms($post->ID,'product_cat', $args);
 
$count = count($terms);
if ($count > 0) {
 
  foreach ($terms as $term) {
      echo '<div class="woocommerce-get-product-category">';
      echo $term->description;
      echo '</div>';
 
  }
 
}

?>


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
<section id="he-muito-simple-container">
<h2 class="he-muito-simple-title">
É muito simples
</h2>
<div id="he-muito-simple" class="splide" >
<div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
				<div class="container">
				<div class="row  content-mobil">
					<div class="col-md-4">
					<img src="https://x9p5i2p7.rocketcdn.me/wp-content/uploads/2020/06/1-1-200x200-1.png" alt="" srcset="https://x9p5i2p7.rocketcdn.me/wp-content/uploads/2020/06/1-1-200x200-1.png">
					</div>
					<div class="col-md-8 pasos">
						<span> 1. </span>
					 <p class="">
					 Preencha seu cadastro incluindo os dados básicos do seu filho. Nós ajudaremos a cuidar e recomendar os melhores produtos para cada estágio do seu crescimento.
					 </p>
					</div>
				</div>
				</div>
			</li>
			<li class="splide__slide">
				<div class="container">
				<div class="row invert-content-mobil">
					<div class="col-md-8 pasos">
						<span> 2. </span>
					<p class="">
					 Selecione o Kit da sua preferência, mudando o aroma, a fragrância, e Veja o que se adéqua melhor para o seu bebê e ganhe a partir de sua segunda compra recorrente uma surpresa.
					 </p>
					</div>
					<div class="col-md-4">
					<img src="https://x9p5i2p7.rocketcdn.me/wp-content/uploads/2020/06/paso2.2-200x200-1.png" alt="" srcset="https://x9p5i2p7.rocketcdn.me/wp-content/uploads/2020/06/paso2.2-200x200-1.png">
					</div>
				</div>
				</div>
			</li>
			<li class="splide__slide">
				<div class="container">
				<div class="row content-mobil">
					<div class="col-md-4">
					<img src="https://x9p5i2p7.rocketcdn.me/wp-content/uploads/2019/03/3-1.png" alt="" srcset="https://x9p5i2p7.rocketcdn.me/wp-content/uploads/2019/03/3-1.png">
					</div>
					<div class="col-md-8 pasos">
						<span> 3. </span>
						<p class="">
					 Compre adicionalmente outros produtos que você ame para o seu consentido.
					 </p>
					</div>
				</div>
				</div>
			</li>
			<li class="splide__slide">
				<div class="container">
				<div class="row invert-content-mobil">
					<div class="col-md-8 pasos">
					
					 <span> 4. </span>
					 <p class="">
					 Faça seu kit ideal. Você pode definir seu proprio kit com os produtos de sua escolha, para você receber com recorrência especifica para cada item.
					 </p>
					</div>
					<div class="col-md-4">
					<img src="https://x9p5i2p7.rocketcdn.me/wp-content/uploads/2019/10/box-ebaby-2-1.png" alt="" srcset="https://x9p5i2p7.rocketcdn.me/wp-content/uploads/2019/10/box-ebaby-2-1.png">
					</div>
				</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();

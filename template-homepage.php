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
<?php carruselSection('Care Friday','Care Friday');?>
			


<section class="call-to-action">
<h2 >Porque nós amamos nossos e seus bebês</h2>

		<div class="call-to-action-description">
			<p>Entendemos o que você precisa. Você quer produtos seguros, com propósito, suaves e puros. Você quer conveniência, flexibilidade e seleção apropriada para cada fase.</p>
<p>Quando o assunto é o melhor para seu bebê, tudo oferecido e o que defendemos e tão puro quanto o mundo que você deseja.</p>

		</div>
		<div class="call-to-action-button">
	<button class="btn-default btn-color-primary" onclick="location.href = '//ebabyhome.com.br/kits/';">Escolha seu kit agora</button>	
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
					<img src="https://ebabyhome.com.br/wp-content/uploads/2020/11/image1.svg" alt="" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/image1.svg">
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
					<img src="https://ebabyhome.com.br/wp-content/uploads/2020/11/paso2.2-200x200-1.svg" alt="" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/paso2.2-200x200-1.svg">
					</div>
				</div>
				</div>
			</li>
			<li class="splide__slide">
				<div class="container">
				<div class="row content-mobil">
					<div class="col-md-4">
					<img src="https://ebabyhome.com.br/wp-content/uploads/2020/11/3-1.svg" alt="" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/3-1.svg">
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
					<img src="https://ebabyhome.com.br/wp-content/uploads/2020/11/box-ebaby-2-1.svg" alt="" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/box-ebaby-2-1.svg">
					</div>
				</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</section>
<!--<section id="nuestros-productos">
<h2 class="he-muito-simple-title">
É muito simples
</h2>
<?php

/*
WP_Term Object ( [term_id] => 16 [name] => Clothing [slug] => clothing [term_group] => 0 [term_taxonomy_id] => 16 [taxonomy] => product_cat [description] => [parent] => 0 [count] => 14 [filter] => raw )

$categories = get_terms( ['taxonomy' => 'product_cat'] );
$content='';
$content.='<div class="product-list-tab">';
$count=0;
foreach ($categories as $category) {
	if($count==0){
		$content.='<button id="tab-'.$category->name.'" class="button-list active">'.$category->name.'</button>';
		
	}else{
		$content.='<button id="tab-'.$category->name.'" class="button-list">'.$category->name.'</button>';
		
	}
	$count++;
}

$content.='</div>';
echo $content;
*/
?>
</section>-->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php


get_footer();
if (is_front_page(  )) {
	modalPromo('https://www.carefree.com.ar/sites/carefree_ar/files/protectores-diarios-carefree-todos-los-dias.png',' '," ",'https://ebabyhome.com.br/#kit-home');
}

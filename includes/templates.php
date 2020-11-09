<?php

function slider (){
	$content='';
	
	$content.='
	<div id="banner_slider" class="splide">
		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
				<picture>
				<source media="(max-width:767px)"  sizes="100vw" srcset="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner1_Ages-mobile-v6-with-btn.jpg">
				<source media="(min-width:768px) and (max-width:991px)"  sizes="100vw" srcset="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner1_Ages-tablet-v6-with-btn.jpg">
				<source media="(min-width:992px)"  sizes="100vw" srcset="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner1_Ages_v6with-btn.jpg">
				<img src="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner1_Ages_v6with-btn.jpg" alt="Flowers" style="width:auto;">
			  </picture>
			  </li>
				<li class="splide__slide">
				<picture>
				<source media="(max-width:767px)"  sizes="100vw" srcset="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner2_HipoglosToalhas-mobile-v3.jpg">
				<source media="(min-width:768px) and (max-width:991px)"  sizes="100vw" srcset="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner2_HipoglosToalhas-tablet-v3btn.jpg">
				<source media="(min-width:992px)"  sizes="100vw" srcset="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner2_HipoglosToalhas_v3btn.jpg">
				<img src="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner2_HipoglosToalhas_v3btn.jpg" alt="Flowers" style="width:auto;">
			  </picture>
				</li>
				<li class="splide__slide">
				<picture>
				<source media="(max-width:767px)"  sizes="100vw" srcset="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner6_HoraSono-mobile-v4bt.jpg">
				<source media="(min-width:768px) and (max-width:991px)"  sizes="100vw" srcset="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner6_HoraSono-tablet-v4-btn.jpg">
				<source media="(min-width:992px)"  sizes="100vw" srcset="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner6_HoraSono_v3-btn.jpg">
				<img src="'. get_stylesheet_directory_uri().'/assets/img/Ebabyhome_Banner6_HoraSono_v3-btn.jpg" alt="Flowers" style="width:auto;">
			  </picture>
				</li>
			</ul>
		</div>
	</div>

	';
 echo $content;	

}
function carruselSection($category,$title){
	ob_start();
	?>
	
	<div id="kit-home" class="">
	<h2 class="kit-home-title"><?php echo $title;?><span class="line"></span></h2>

	<div id="kit-home-slider" class="splide">
		<div class="splide__track">
			<ul class="splide__list products">
				<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 12,
						'tax_query'=>array(
							'order'=>'date',
								array(
									'taxonomy' => 'product_cat',
								'field'=>'slug',
								'terms'=>$category//aqui el slug de la categoria del producto
								)
								
							),
						

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
	echo ob_get_clean();
}
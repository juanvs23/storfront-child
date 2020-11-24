<?php

function slider (){
	$content='';
	
	$content.='
	<div id="banner_slider" class="splide">
		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
				<picture>
				<source media="(max-width:767px)"  sizes="100vw" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner1_Ages-mobile-v6-with-btn.jpg.webp">
				<source media="(min-width:768px) and (max-width:991px)"  sizes="100vw" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner1_Ages-tablet-v6-with-btn.jpg.webp">
				<source media="(min-width:992px)"  sizes="100vw" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner1_Ages_v6with-btn-scaled.jpg.webp">
				<img src="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner1_Ages_v6with-btn-scaled.jpg" alt="Flowers" style="width:auto;">
			  </picture>
			  </li>
				<li class="splide__slide">
					<picture>
				<source media="(max-width:767px)"  sizes="100vw" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner2_HipoglosToalhas-mobile-v3.jpg.webp">
				<source media="(min-width:768px) and (max-width:991px)"  sizes="100vw" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner2_HipoglosToalhas-tablet-v3btn.jpg.webp">
				<source media="(min-width:992px)"  sizes="100vw" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner2_HipoglosToalhas_v3btn.jpg.webp">
				<img src="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner2_HipoglosToalhas_v3btn.jpg" alt="Flowers" style="width:auto;">
			  </picture>
				</li>
				<li class="splide__slide">
					<picture>
				<source media="(max-width:767px)"  sizes="100vw" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner6_HoraSono-mobile-v4bt.jpg.webp">
				<source media="(min-width:768px) and (max-width:991px)"  sizes="100vw" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner6_HoraSono-tablet-v4-btn.jpg.webp">
				<source media="(min-width:992px)"  sizes="100vw" srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner6_HoraSono_v3-btn.jpg.webp">
				<img src="https://ebabyhome.com.br/wp-content/uploads/2020/11/Ebabyhome_Banner6_HoraSono_v3-btn.jpg" alt="Flowers" style="width:auto;">
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

	<div id="kit-home-slider" class="splide kit-home-slider">
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

function modalPromo($img,$title,$text,$url){
	?>
<style>
.modal-content{
	max-width:600px;
	}
</style>
<?php
	$content='';
	$content.='<div class="modal-wrapper">';
	$content.='<div class="modal-content">';
	$content.='<div class="modal-closer"><i class="fa fa-times"></i></div>';
	$content.='<div class="modal-container" style="opacity:1;">';
	$content.='<a  href="'.$url.'">';
	$content.='<picture style="opacity:1;">';
	$content.='<source srcset="https://ebabyhome.com.br/wp-content/uploads/2020/11/pop-up-ebaby-bemcomigo.png.webp" media="(min-width: 600px)">';
	$content.='<img src="https://ebabyhome.com.br/wp-content/uploads/2020/11/pop-up-ebaby-bemcomigo.png" alt="'. $title .'">';
	$content.='</picture>';
	$content.='<div class="modal-text">';
	$content.='<h3>'. $title .'</h3>';
	$content.='<p>'.$text.'</p>';
	$content.='</a>';
	$content.='</div>';
	$content.='</div>';
	$content.='</div>';
	$content.='</div>';

	echo $content;
?>
<script>
const modelWrapper= document.querySelector('.modal-wrapper');
    const closerModal=document.querySelector('.modal-closer');
  
    if(modelWrapper){
        setTimeout(()=>{
            modelWrapper.style.opacity="1"
        },1500)
        closerModal.addEventListener('click',()=>{
            modelWrapper.remove()
        })
        /*setTimeout(()=>{
           if (modelWrapper) {
            modelWrapper.remove()
           }
        },6000*/
    }
</script>
<?php	
	
}
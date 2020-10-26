<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ztgroup-theme
 */

?>
	</div><!-- .col-full -->
	</div>

	<footer id="colophon" class="site-footer">
	
	<?php if (is_active_sidebar('footer-top-1') || is_active_sidebar('footer-top-2') || is_active_sidebar('footer-top-3') || is_active_sidebar('footer-top-4')):?>
		<div class="footer-top ">
		<div class="container">
		<div class="row">
		<?php
		$sideBars=0;
	 for ($i=1; $i <=4 ; $i++) { 
		$sideBars+=is_active_sidebar('footer-top-'.$i.'');
	
	 }	
	 switch ($sideBars) {
		 case '2':
			for ($i=1; $i <=4; $i++) { 
				if(is_active_sidebar('footer-top-'.$i.'')){
					echo '<div class="col-md-6">';
					dynamic_sidebar( 'footer-top-'.$i.'' );
					echo '</div>';
				}
			}
			 break;
		 
		 
		 case '3':
			for ($i=1; $i <=4 ; $i++) { 
				if(is_active_sidebar('footer-top-'.$i.'')){
					echo '<div class="col-md-4">';
					dynamic_sidebar( 'footer-top-'.$i.'' );
					echo '</div>';
				}
			}
			 break;
		case '4':
			for ($i=1; $i <=4 ; $i++) { 
				
				if(is_active_sidebar('footer-top-'.$i.'')){
					
					echo '<div class="col-md-3">';
				
					dynamic_sidebar( 'footer-top-'.$i.'' );
					echo '</div>';
				}
			}
			break;
		 
		 default:
		 for ($i=1; $i <=4; $i++) { 
			if(is_active_sidebar('footer-top-'.$i.'')){
				echo '<div class="col-md-12">';
				dynamic_sidebar( 'footer-top-'.$i.'' );
				echo '</div>';
			}
		}
			 break;
	 }
	 
	?>		
	</div>
	</div>
	</div>
	<?php endif; ?>
	<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')):?>
		<div class="footer-center ">
		<div class="container">
		<div class="row">
		<?php
		$sideBars=0;
	 for ($i=1; $i <=4 ; $i++) { 
		$sideBars+=is_active_sidebar('footer-'.$i.'');
	
	 }	
	 switch ($sideBars) {
		 case '2':
			for ($i=1; $i <=4; $i++) { 
					
				if(is_active_sidebar('footer-'.$i.'')){
					echo '<div class="col-md-6">';
					
					dynamic_sidebar( 'footer-'.$i.'' );
					echo '</div>';
				}
			}
			 break;
		 
		 
		 case '3':
			for ($i=1; $i <=4 ; $i++) { 
				if(is_active_sidebar('footer-'.$i.'')){
					echo '<div class="col-md-4">';
					dynamic_sidebar( 'footer-'.$i.'' );
					echo '</div>';
				}
			}
			 break;
		case '4':
			for ($i=1; $i <=4 ; $i++) { 
				if(is_active_sidebar('footer-'.$i.'')){
					echo '<div class="col-md-3">';
					dynamic_sidebar( 'footer-'.$i.'' );
					echo '</div>';
				}
			}
			break;
		 
		 default:
		 for ($i=1; $i <=4 ; $i++) { 
			if(is_active_sidebar('footer-'.$i.'')){
				echo '<div class="col-md-12">';
				dynamic_sidebar( 'footer-'.$i.'' );
				echo '</div>';
			}
		}
			 break;
	 }
	 
	?>		
	</div>
	</div>
	</div>
	<?php endif; ?>
	<?php if (is_active_sidebar('footer-bottom-1') || is_active_sidebar('footer-bottom-2') || is_active_sidebar('footer-bottom-3')):?>
		<div class="footer-bottom">
		<div class="container">
		<div class="row">
		<?php
		$sideBars=0;
	 for ($i=1; $i <=3 ; $i++) { 
		$sideBars+=is_active_sidebar('footer-bottom-'.$i.'');
	
	 }	
	 switch ($sideBars) {
		 case '2':
			for ($i=1; $i <=3 ; $i++) { 
				if(is_active_sidebar('footer-bottom-'.$i.'')){
					echo '<div class="col-md-6">';
					
					dynamic_sidebar( 'footer-bottom-'.$i.'' );
					echo '</div>';
				}
			}
			 break;
		 
		 
		 case '3':
			for ($i=1; $i <=3 ; $i++) { 
				if(is_active_sidebar('footer-bottom-'.$i.'')){

					echo '<div class="col-md-4">';
					
					dynamic_sidebar( 'footer-bottom-'.$i.'' );
					echo '</div>';
				}
			}
			 break;
	
		 default:
		 for ($i=1; $i <=3 ; $i++) { 
			if(is_active_sidebar('footer-bottom-'.$i.'')){
				
				echo '<div class="offset-md-4 col-md-4">';
				
				dynamic_sidebar( 'footer-bottom-'.$i.'' );
				echo '</div>';
			}
		}
			 break;
	 }
	 
	?>		
	</div>
	</div>
	</div>
	<?php endif; ?>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

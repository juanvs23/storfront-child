<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ztgroup-theme
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
<?php wp_body_open(); ?>
	<header id="masthead" class="site-header ">
		<div class="headers-section-container ">	
			<div class="header-top row ">
				<div class="container">
					<div class="row">
					
						<div class="col-6 header-top-sections d-none d-md-block socials">
							<a href="https://www.facebook.com/e-Baby-Home-733581687036799/" class="social facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="https://twitter.com/ebabyhome" class="social twitter" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="https://www.instagram.com/ebabyhome/" class="social instagram" target="_blank"><i class="fab fa-instagram"></i></a>
						</div>
						<div class=" col-12 col-md-6 header-top-sections user-config">
							<?php
								if(is_user_logged_in()){
									echo '<a class="" href="'. network_site_url( '/' ).'my-account/customer-logout/"> <i class="fa fa-sign-out-alt"></i> <span>Sair</span></a>';
									echo '<a class="" href="'. network_site_url( '/' ).'my-account/"> <i class="fa fa-home"></i>  <span>Minha Conta</span></a>';
								}else{
									echo '<a title="Cadastre-se"  class="" href="'. network_site_url( '/' ).'mi-cuenta/?=registrar=si"> <i class="fa fa-user-plus"></i> <span>Cadastre-se</span></a>';
									echo ' <a class="" href="'. network_site_url( '/' ).'my-account/?=registrar=no"> <i class="fa fa-user"></i> <span>Entrar</span></a>';
								}
							?>
						</div>
					
					</div>
				</div>
			</div>
<div id="menu-sticky">
			<div class="header-center">
				<div class="container">
				<div class="row">
				<div class="col-12 col-md-3 logo--section  ">
				<div class="open">
						<button id="open-menu" class="open-menu header-btn btn-default" ><i class="fa fa-bars"></i></button>
					</div>
					<div class="site-branding">
					
						<?php
						the_custom_logo();
						?>
					</div><!-- .site-branding -->
					<div class="functional-container">
						<div class="open-search">
							<button id="shopping-cart" class="shopping-cart-class header-btn btn-default" ><i class="fa fa-shopping-bag"></i></button>
							<a class="cart-customlocation" id="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
						</div>	
						<div class="open-search">
							<button  id="open-search-btn"  class="open-search-btn header-btn btn-default" ><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
				<div id="search-section" class="col-12 col-md-6 search-section col-lg-6 ">
					<div class="search-container">
						<button id="close-search"  class="close-search" ><i class="fa fa-times"></i></button>
						<h3>Buscar...</h3>
						<form role="search" method="get" class="search-form-header" action="<?php echo home_url( '/' ); ?>">
							<label for="s" class="form-label">
							
								<input type="text" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Buscar...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
								<input type="hidden" value="produto" name="post_type" id="post_type" />

							</label>

							<button type="submit" class="search-btn"><i class="fa fa-search"></i> </button>
						</form>
					</div>
				</div>
				<div id="cart-desktop-section" class="d-none d-md-block col-md-3 cart-desktop  ">
				<?php do_action( 'storefront_header_cart' ); ?>
				<!--<div id="carrito"></div>-->
				<a class="cart-customlocation-desktop" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-cart"></i> <?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
				</div>
			</div>
				
			</div>
			<div class="header-bottom d-none d-md-block">
				<div class="container">
					<div class="row">
					<div class="menu-container ">
					<ul class="navigation-mobil">
						<?php 
						if(is_user_logged_in()){
							echo '<li> <a class="" href="'. network_site_url( '/' ).'mi-cuenta/customer-logout/"> <i class="fa fa-sign-out-alt"></i> </a> </li>';
							
							echo '<li> <a class="'. network_site_url( '/' ).'mi-cuenta/" href="#"> <i class="fa fa-home"></i> </a> </li>';
						}else{
							echo '<li> <a title="Cadastre-se"  class="" href="'. network_site_url( '/' ).'mi-cuenta/?=registrar=si"> <i class="fa fa-user-plus"></i> </a> </li>';
							echo '<li> <a class="" href="'. network_site_url( '/' ).'mi-cuenta/?=registrar=no"> <i class="fa fa-user"></i> </a> </li>';
						}
						?>
						
						

						
						
						<li class="class-mini-cart"> 
							<a class="open-minicart-mobil" href="#">
								<i class="fa fa-shopping-cart"></i> 

							</a>
								<ul class="mini-cart-content" >
									
									<li><a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a></li>
								</ul>
							
						</li>
						<li> <a class="" conclick="openNav()" id="open-menu" href="javascript:void(0)"> <i class="fa fa-ellipsis-v"></i> </a> </li>
					</ul>
				</div>
				<div class="nav-container">
					<nav id="site-navigation" class="main-navigation">
						
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
					</div>
				</div>
			
			</div>
</div>
		</div>
	</header><!-- #masthead -->
	
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" id="cerradorBtn">&times;</a>
<?php
						wp_nav_menu(
							array(
								'container_id'=>'primary-menu',
								'theme_location' => 'mobile-menu',
								'menu_id'        => 'menu-container',
							)
						); 
						?>
<div id="social-mobil">
	<p>Social media</p>
	<div class="socials">
		<a href="https://www.facebook.com/e-Baby-Home-733581687036799/" class="social facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
		<a href="https://twitter.com/ebabyhome" class="social twitter" target="_blank"><i class="fab fa-twitter"></i></a>
		<a href="https://www.instagram.com/ebabyhome/" class="social instagram" target="_blank"><i class="fab fa-instagram"></i></a>
	</div>						
</div>
</div>
	<div id="page" class="site">
	<?php  if(is_front_page()|| is_shop()){
		slider();
	
	}
		?>
		<div class="container">
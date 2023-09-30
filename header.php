<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="top-navigation sticky-navigation">
		<div class="left-links">
			<a href="https://www.facebook.com/galacticblum.decoracion" target="_blank">
				<i class="fa-brands fa-facebook-f"></i>
			</a>
			<a href="https://twitter.com/Galacticblum" target="_blank" >
				<i class="fa-brands fa-twitter"></i>
			</a>
		
			<a href="https://www.instagram.com/galactic_blum/?hl=es" target="_blank">
				<i class="fa-brands fa-instagram"></i>	
			</a>
		
			<a href="https://www.youtube.com/@galacticblumshop" target="_blank">
				<i class="fa-brands fa-youtube"></i>
			</a>
		
			<a href="https://www.linkedin.com/company/galacticblumsl/" target="_blank">
				<i class="fa-brands fa-linkedin-in"></i>
			</a>
			<a href="tel:0034956377022">
				Llámanos: (+34) 956 377 022
			</a>
		</div>
		<div class="right-links">
			<a href="https://galacticblum.com/mi-cuenta">
				<img class="logo img-fluid" src="<?php echo esc_url( get_template_directory_uri() . '/img/usuario.svg' ); ?>" alt="Galacticblum SL" width="20" height="20">
				<span>Iniciar sesión</span>
			</a>
			<a href="https://galacticblum.com/carrito">
				<img class="logo img-fluid" src="<?php echo esc_url( get_template_directory_uri() . '/img/carrito-blanco.svg' ); ?>" alt="Galacticblum SL" width="20" height="20">
				<span>Carrito</span>
			</a>
			
			<a href="//galacticblum.com/module/iqitwishlist/view">
				<i class="fa fa-regular fa-heart"></i> Lista de deseos (<span id="iqitwishlist-nb">0</span>)
			</a>
		</div>
	</div>

	<header class="site-header">

		<div class="site-branding">
			<?php if ( has_custom_logo() ): ?>
				<div class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( galacticblum_get_logo_url() ); ?>">
					</a>
				</div>
			<?php endif; ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php if ( has_nav_menu( 'main-menu' ) ): ?>
				<?php
				wp_nav_menu(
					[
						'theme_location' => 'main-menu',
						'menu_id'        => 'main-menu',
					]
				);
				?>
			<?php endif; ?>
			<?php if ( has_nav_menu( 'mobile-menu' ) ): ?>
				<div class="menu-toggle">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
				<div class="mobile-menu">
					<?php
					wp_nav_menu(
						[
							'theme_location' => 'mobile-menu',
							'menu_id'        => 'mobile-menu',
						]
					);
					?>

				</div>
			<?php endif; ?>
		</nav>
	</header>

	<div id="content" class="row">

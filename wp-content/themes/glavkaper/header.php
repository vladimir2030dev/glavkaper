<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GlavKaper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<?php global $redux_demo; ?>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="header__top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 header__top__social">
						<a class="header__top__social-link" href="<?php echo $redux_demo['url-telegram'] ?>" target="_blank">
							<i class="fab fa-telegram"></i>
						</a>
						<a class="header__top__social-link" href="<?php echo $redux_demo['url-instagram'] ?>" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
						<a class="header__top__social-link" href="<?php echo $redux_demo['url-youtube'] ?>" target="_blank">
							<i class="fab fa-youtube"></i>
						</a>
					</div>
					<div class="col-lg-3 offset-6">
						<input class="form-control me-2 header__top__search" type="search" placeholder="Поиск по сайту" aria-label="Search">
					</div>
				</div>
			</div>
		</div>
		<div class="header__main">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-expand-lg navbar-light pt-0 pb-0">
						<a class="navbar-brand pt-0 pb-0" href="<?php echo get_home_url(); ?>">
							<img class="header__main__logo" src="<?php echo $redux_demo['logo-main']['url'] ?>" alt="ГлавКапер Логотип">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div  id="navbarTogglerDemo02" class="collapse navbar-collapse" >
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
								'menu_class' => 'navbar-nav ml-auto mr-auto mb-lg-0',
								'add_li_class'  => 'nav-item',
							)
						);
						?>
						
						<div class="header__main__social-mobile pt-3">
							<div class="col-lg-12 header__top__social text-end pt-4">
								<a class="header__top__social-link" href="<?php echo $redux_demo['url-telegram'] ?>" target="_blank">
									<i class="fab fa-telegram"></i>
								</a>
								<a class="header__top__social-link" href="<?php echo $redux_demo['url-instagram'] ?>" target="_blank">
									<i class="fab fa-instagram"></i>
								</a>
								<a class="header__top__social-link" href="<?php echo $redux_demo['url-youtube'] ?>" target="_blank">
									<i class="fab fa-youtube"></i>
								</a>
							</div>
							<div class="col-lg-12 pt-4">
								<input class="form-control header__top__search" type="search" placeholder="Поиск по сайту" aria-label="Search">
							</div>
						</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
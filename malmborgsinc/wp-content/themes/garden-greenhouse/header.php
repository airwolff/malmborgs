<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package malmborgs_theme
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'garden-greenhouse' ); ?></a>


<!--  HEADER  -->
<?php 
$image = get_header_image(get_the_ID());
?>
<header class=" padding-sm position-sticky top-0 js-f-header bg-accent border-bottom border-black">
			<div class="f-header__mobile-content container max-width-100%">
			  <a href="#0" class="f-header__logo">
			  
				<img class="max-width-xxxxs" width="auto" height="100" src="<?php echo $image;?>" alt="Malmborg's Mobile Logo">
			  </a>
		  
			  <button class="reset anim-menu-btn js-anim-menu-btn f-header__nav-control js-tab-focus" aria-label="Toggle menu">
				<i class="anim-menu-btn__icon anim-menu-btn__icon--close" aria-hidden="true"></i>
			  </button>
			</div>
		  
			<div class="f-header__nav " role="navigation">
			  <div class="f-header__nav-grid justify-between@md container max-width-100%">
				<img class="max-width-xxxxs" width="auto" height="100" src="<?php echo $image;?>" alt="Malmborg's Logo">
				<ul class="f-header__list">
				  <li class="f-header__item"><a href="#0" class="f-header__link">About Us</a></li>
				  <li class="f-header__item"><a href="#0" class="f-header__link">Plants</a></li>
				  <li class="f-header__item"><a href="#0" class="f-header__link">Supplies</a></li>
				  <li class="f-header__item"><a href="#0" class="f-header__link">Locations</a></li>
				  <li class="f-header__item">
					<div class="search-input search-input--icon-right radius-lg">
					  <input class="f-header__form-control search-input__input form-control padding-sm radius-lg" type="search" name="search-input" id="search-input" placeholder="Search...">
					  <button class="search-input__btn">
						<svg class="icon" viewBox="0 0 24 24"><title>Search</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="22" y1="22" x2="15.656" y2="15.656"></line><circle cx="10" cy="10" r="8"></circle></g></svg>
					  </button>
					</div>
				  </li>
				</ul>
			  </div>
			</div>
		  </header>

		<!-- END HEADER -->

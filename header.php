<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package The Park
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="global-navigation">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-holder"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="The Park Restaurant of Echo Park logo" title="The Park Restaurant" class="logo" /></a>
	<section class="nav">
		<?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>
	</section>
</nav>


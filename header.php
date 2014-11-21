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

	<div class="container clearfix">

			<div class="grid_12">

				<div class="grid_4 top-navigation">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1>The Park Restaurant</h1></a>

				</div>

				<div class="grid_8 omega nav">


					<?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>

				</div>

			</div>


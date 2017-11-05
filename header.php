<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link http://wpfw.net/docs/deus/#header
 *
 * @package WordPress
 * @subpackage Deus
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="page" class="site">

			<header id="masthead" class="site-header" role="banner">

				<?php get_template_part( 'template-parts/header/navigation', 'top' ); ?>

			</header>

			<div id="pageContainer" class="site-container">

				<div id="content" class="site-content content-width">

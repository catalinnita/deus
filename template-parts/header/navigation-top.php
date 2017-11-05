<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

if ( !has_nav_menu( 'main' ) && !has_nav_menu( 'right' ) )
	return;

?>
<a id="burger-menu" href="#" class="fa fa-bars"></a>

<nav id="main-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', TEMPLATE_DOMAIN ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'main',
		'menu_id'        => 'main-menu'
	) ); ?>

</nav>

<nav id="right-navigation" class="rifgt-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Right Menu', TEMPLATE_DOMAIN ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'right',
		'menu_id'        => 'right-menu'
	) ); ?>

</nav><!-- #site-navigation -->

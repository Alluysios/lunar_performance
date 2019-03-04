<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lunar_performance
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
<div id="page" class="site">
<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
	<div class="header__content">
	<?php 
		if ( is_front_page() && is_home() ) :
			?>
			<h1 class="header__title site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h1 class="header__description site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></h1>
			<?php
		else :
			?>
			<h1 class="header__title site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="header__description site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></h2>
			<?php
		endif;
		$lunar_performance_description = get_bloginfo( 'description', 'display' );
		if ( $lunar_performance_description || is_customize_preview() ) :
	?>
	</div>
	<header id="masthead" class="header site-header">
		<nav id="site-navigation" class="navigation main-navigation">
			<div class="header__branding site-branding">
				<?php
				the_custom_logo();
				?>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<button class="navigation__button menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i><?php esc_html_e( '', 'lunar_performance' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'navigation__items',
				) );
			?>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">

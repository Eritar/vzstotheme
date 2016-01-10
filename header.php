<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VzstoTheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<style>
	   @font-face {
    font-family: 'font-awesome';
     src: url('fonts/font/font-awesome.eot');
     src: url('/wp-content/themes/vzstotheme/fonts/font/font-awesome.eot') format('embedded-opentype'),
          url('/wp-content/themes/vzstotheme/fonts/font/font-awesome.woff') format('woff'),
          url('/wp-content/themes/vzstotheme/fonts/font/font-awesome.ttf') format('truetype'),
          url('/wp-content/themes/vzstotheme/fonts/font/font-awesome.svg') format('svg');
    font-weight: normal;
    font-style: normal;
   }
   [class^="icon-bars"]:before, [class*=" icon-bars"]:before {
    font-family: "font-awesome";
    font-style: normal;
    font-weight: normal;
   }
   .icon-bars:before { content: '\e800'; } 
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vzstotheme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			echo ("<img src=\"/wp-content/uploads/2016/01/vzsto.png\">");
			if ( is_front_page() && is_home() ) : ?>
				
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>				
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; 
			echo ("<button class=\"menu-toggle\"><?php _e( 'Menu and widgets', 'vzstotheme' ); ?><i class ='icon-bars'></i></button>");?>
		</div><!-- .site-branding -->

		
	</header><!-- #masthead -->
	<!-- #site-navigation -->
		<?php get_sidebar(); ?>
	<div id="content" class="site-content">
	



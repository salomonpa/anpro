<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bizdirectory
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
<?php
$bizdirectory_options = bizdirectory_theme_options();
$fb_url = $bizdirectory_options['fb_url'];
$youtube_url = $bizdirectory_options['youtube_url']; ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bizdirectory' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
		<div class="site-logo">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$bizdirectory_description = get_bloginfo( 'description', 'display' );
			if ( $bizdirectory_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $bizdirectory_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>



		</div><!-- .site-logo -->


			<div id="hamburger-menu">
				<button class="open-menu">
				<span></span>
				<span></span>
				<span></span>
				</button>
			</div>

		
		<nav id="site-navigation" class="header-navigation">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<?php
			    if ($fb_url || $youtube_url ): ?>
			    <div class="social-icons">
			        <?php if ($fb_url): ?>
			        <span><a target="_blank" href='<?php echo esc_url($fb_url) ?>'><i class="fa-brands fa-facebook"></i></a></span>
			        <?php endif;  ?>

			        
			         <?php if ($youtube_url): ?>
			        <span><a target="_blank" href='<?php echo esc_url($youtube_url) ?>'><i class="fa-brands fa-youtube"></i></a></span>
			        <?php endif;  ?>

			    </div>

			<?php endif;  ?>
		<button class="close-menu"><span class="sr-text"><?php echo esc_html__('Close Menu','bizdirectory'); ?></span></button>
		</nav><!-- #site-navigation -->

		</div>


		</div>
		</div>
	</header><!-- #masthead -->

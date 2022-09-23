<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AutoInsurance
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&family=Roboto:300,400,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'autoinsurance' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="grid">
			<div class="site-branding col-desk-4 col-mob-4">
				
			</div>
			<div class="site-cta col-desk-4 col-mob-4">
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
				$autoinsurance_description = get_bloginfo( 'description', 'display' );
				if ( $autoinsurance_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $autoinsurance_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>
			<div class="site-social col-desk-4 col-mob-4">
			</div>
			<!-- .site-branding -->

			<!--<nav id="site-navigation" class="main-navigation cold-desk-6 col-mob-6">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'autoinsurance' ); ?></button>
				<?php
				// wp_nav_menu(
				// 	array(
				// 		'theme_location' => 'menu-1',
				// 		'menu_id'        => 'primary-menu',
				// 	)
				// );
				?>
			</nav>--> <!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<section class="section site-sub-header bg-blue">
		<div class="grid">
			<div class="col-desk-12 col-mob-4">
				<h2 class="center">Shop Affordable Car Insurance</h2>
			</div>
		</div>
	</section>

	<div id="content" class="site-content">
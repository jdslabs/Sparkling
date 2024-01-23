<?php
/* *
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */

if ( isset( $_SERVER['HTTP_USER_AGENT'] ) && ( strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE' ) !== false ) ) {
	header( 'X-UA-Compatible: IE=edge,chrome=1' );
} ?>
<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="<?php echo of_get_option( 'nav_bg_color' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default
		<?php
		if ( of_get_option( 'sticky_header' ) ) {
			echo 'navbar-fixed-top';}
?>
" role="navigation">
			<div class="site-navigation-inner">
				<div class="navbar-header">


												<div id="logo">
													<?php if ( get_header_image() != '' ) { ?>
															<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
																<?php if ( is_home() ) { ?>
																<h1 class="site-name hide-site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
															<?php
}
} else {
echo is_home() ? '<h1 class="site-name">' : '<p class="site-name">';
?>
																<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
																	<svg viewBox="0 0 277.1 276.7" xmlns="http://www.w3.org/2000/svg"><g fill="#ff423e"><path d="m138.2 4.3c-73.9 0-134.1 60.2-134.1 134.1 0 74 60.2 134.2 134.1 134.2 74 0 134.1-60.2 134.1-134.2.1-73.9-60.1-134.1-134.1-134.1zm111.6 134.1c0 61.5-50 111.6-111.6 111.6s-111.6-50-111.6-111.6c0-61.5 50-111.6 111.6-111.6s111.6 50.1 111.6 111.6z"/><path d="m163 48.6c-16.2 0-22 21.9-32.9 79.7h-54.3l2.3 12.2c13.5 72.9 22.8 86.2 36.2 86.2 16.5 0 22.5-22.5 33-77.8h53.6l-2.1-12.1c-13.4-74.5-22.5-88.2-35.8-88.2zm13.2 79.8h-26.9c3.9-20.2 9.4-44.4 13.7-56.7 2.5 7 6.9 22.6 13.2 56.7zm-50 20.6-.9 4.8c-3.4 18-7.5 39.8-11.3 50.8-3.2-7.4-9.6-24.5-15.9-55.6z"/></g></svg>
																	<?php bloginfo( 'name' ); ?>
																</a>
														<?php echo is_home() ? '</h1>' : '</p>'; ?>
													<?php } ?>
												</div><!-- end of #logo -->

					<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<?php sparkling_header_menu(); // main navigation ?>

			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div class="top-section">
			<?php sparkling_featured_slider(); ?>
			<?php sparkling_call_for_action(); ?>
			<?php do_action( 'sparkling_in_top_section_header' ); ?>
		</div>

		<div class="container main-content-area">
			<?php $layout_class = get_layout_class(); ?>
			<div class="row <?php echo $layout_class; ?>">
				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?>">

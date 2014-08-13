<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
			<?php get_search_form(); ?>
			<div id="top-buttons">
				<ul id="buttons" class="nav">
					<li id="button-1" class="top-button-1 facebook"><a href="http://www.facebook.com"><img src="http://hamiltontestingenvironment.benhamilton.co.uk/wp-content/uploads/2013/02/f_logo.png" alt="Facebook" height=27px></a></li>
					<li id="button-2" class="top-button-2 twitter"><a href="http://www.twitter.com"><img src="http://hamiltontestingenvironment.benhamilton.co.uk/wp-content/uploads/2013/02/twitter-bird-dark-bgs1.png" alt="Twitter" height=27px></a></li>
					<li id="button-3" class="top-button-3"><a href="http://www.injectnewkolor.com/about/">ABOUT</a></li>
					<li id="button-4" class="top-button-4"><a href="http://www.injectnewkolor.com/contact/">CONTACT</a></li>
				</ul>
			</div>
			<div class="panel">
				<div id="hover" class="hover-item-one">
					<div class="front-left">
						<div class="inside">
							<img src="http://hamiltontestingenvironment.benhamilton.co.uk/wp-content/uploads/2013/02/twitter-bird-dark-bgs1.png" alt="Twitter" height=50px style="margin-top:24px;">
						</div>
					</div>
					<div class="back-left">
						<div class="inside">
							<a class="twitter-timeline" href="https://twitter.com/InjectNewKolor" data-widget-id="311088966541639682">Tweets by @InjectNewKolor</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</div>
				</div>
				<div id="hover" class="hover-item-two">
					<div class="front-right">
						<div class="inside">
							<img src="http://hamiltontestingenvironment.benhamilton.co.uk/wp-content/uploads/2013/04/Video-Icon.png" alt="Video" height=50px style="margin-top:24px;">
						</div>
					</div>
					<div class="back-right">
						<div class="inside">
							<iframe src="http://player.vimeo.com/hubnut/album/2346718?color=44bbff&amp;background=000000&amp;slideshow=1&amp;video_title=1&amp;video_byline=1" width="200" height="150" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
				<div id="hover" class="hover-item-three">
					<div class="front-left">
						<div class="inside">
							<img src="http://hamiltontestingenvironment.benhamilton.co.uk/wp-content/uploads/2013/04/eps_rgb_white-on-black.png" alt="Soundcloud" height=50px style="margin-top:24px;">
						</div>
					</div>
					<div class="back-left">
						<div class="inside">
							<iframe width="180" height="180" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F4823944"></iframe>
						</div>
					</div>
				</div>
				<div id="hover" class="hover-item-four">
					<div class="front-right">
						<div class="inside">
						<img src="http://hamiltontestingenvironment.benhamilton.co.uk/wp-content/uploads/2013/04/camera.png" alt="Gallery" height=50px style="margin-top:24px;">
						</div>
					</div>
					<div class="back-right">
						<div class="inside">
							<?php echo do_shortcode('[slideshow id=12]'); ?>
						</div>
					</div>
				</div>
			</div>
			<div id="slider">
				<?php do_shortcode('[upzslider usingphp=true]'); ?>
			</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?> <?php get_search_form(); ?> </h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?> </a> 
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/screen.css" />
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 767px)" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" />
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" />
		
		<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/css/print.css" />

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<script src="<?php bloginfo('template_directory'); ?>/js/mootools.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/blackbox.js"></script>
		<script>
			// load the html5shiv to support old browsers
			if((Browser.name === 'ie' && Browser.version < 9) || (Browser.name === 'firefox' && Browser.version < 4)) {
				document.write(unescape('%3Cscript src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"%3E%3C/script%3E'));
			}
			// activate the slider if one is existing
			window.addEvent('load', function() {
				if(document.getElementById('slides') != null) {
					var slider;
					window.addEvent('domready', function() {
						slider = new Blackbox('slides');
					});
				}
			});
		</script>
		<?php 
			wp_head();
			if(is_user_logged_in()) {
				echo "<style>";
				echo "aside { top: 136px; }";
				echo "</style>";
			}
		?>
	</head>
	<body>
		<div id="all">
			<header>
				<h1>
					<a href="<?php get_option('home'); ?>/" title="<?php bloginfo('name'); ?>">
						<img src="<?php bloginfo("template_directory"); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
					</a>
				</h1>
				<div class="clear"></div>
				<div id="right">
					<nav>
						<ul>
							<?php 
								wp_nav_menu(array(
									'container'		=> '',
									'fallback_cb'	=> '',
									'menu'			=> 'main_nav',
									'items_wrap'	=> '%3$s'
								));
							?>
						</ul>
					</nav>
				</div>
			</header>
			<section id="content">

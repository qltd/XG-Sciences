<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) { echo " | $site_description"; }
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 ) { echo ' | Page '.max( $paged, $page ); }
		?>
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="<?php bloginfo( 'url' ); ?>/favicon.gif" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Copse:400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css?v=1.0" media="all" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css?v=1.0" media="all" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?v=1.0" media="all" type="text/css" />

	<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.5.3.min.js"></script>

	<?php if (is_singular() && get_option( 'thread_comments')) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38304596-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body <?php body_class(); ?>>

	<div id="container" class="clearfix">
		<header>
			<a href="<?php bloginfo('url'); ?>" id="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" /></a>

			<div id="top-menu" class="pull-right">
				<ul>
					<?php wp_nav_menu( array('theme_location' => 'top', 'container' => '', 'items_wrap' => '%3$s' )); ?>	
				</ul>
			</div>


			<nav>
				<ul>
					<?php wp_nav_menu( array('theme_location' => 'main', 'container' => '', 'items_wrap' => '%3$s' )); ?>	
				</ul>
			</nav>
		</header>


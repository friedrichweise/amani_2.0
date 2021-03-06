<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<title><?php
		if ( is_single() ) { single_post_title(); }
		elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
		elseif ( is_page() ) { single_post_title(''); }
		elseif ( is_search() ) { bloginfo('name'); print ' | Suche'; }
		elseif ( is_404() ) { bloginfo('name'); print ' | Seite nicht gefunden'; }
		else { bloginfo('name'); wp_title('|'); get_page_number(); }
	?></title>

	<!-- blocks full scale -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="initial-scale=1">
	<meta name="author" content="Amani Kinderdorf e.V." />
	<meta name="description" content="Der Verein Amani Kinderdorf e.V. baut und betreibt zwei Dörfer für bedürftige Kinder in der Region Iringa im Süden Tansanias und fördert die schulische und berufliche Bildung dieser Kinder." />
	<meta name="google-site-verification" content="AIq1kRfS_3ruMWJtQIDk2Ts8YGAJx4ib1ZZJRN_I4Ds" />
	<meta name="keywords" content="tanzania, tansania, kilolo, kitwiru, amani, kinderdorf, freiwilligendienst, Patenschaft, weltwärts, Amani Kinderdorf, Amani-Kinderdorf, Amani Kinderdorf e.V., Amani Kinderdorf, Iringa, RUCU, Computer, Bildung, Schule, Schreiner, Schreinerei, Tischler. Tischlerei, Geldern" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/style.css" />    
	<?php if(is_front_page()||is_home()): ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/styles/slick.css"/>
	<?php endif; ?>

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url')?>/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('template_url')?>/img/favicons/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('template_url')?>/img/favicons/safari-pinned-tab.svg" color="#a80319">
	<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/favicons/favicon.ico">
	<meta name="msapplication-config" content="<?php bloginfo('template_url')?>/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "NGO",
	  "url": "https://www.amani-kinderdorf.de",
	  "name": "Amani Kinderdorf",
	  "legalName": "Amani Kinderdorf e.V.",
	  "disambiguatingDescription": "Der Verein Amani Kinderdorf e.V. baut und betreibt zwei Dörfer für bedürftige Kinder in der Region Iringa im Süden Tansanias und fördert die schulische und berufliche Bildung dieser Kinder.",
	  "sameAs": [
		"http://facebook.com/Amani.Kinderdorf",
		"https://de.wikipedia.org/wiki/Amani-Kinderdorf"
	  ]
	}
	</script>

	<?php wp_head(); ?>
</head>
<body>

<div class="stickyHeader">
	<div class="contentWrapper stickyHeaderMenuContainer">
		<ul class="logo-container">
			<li>
				<a href="<?php echo home_url();?>" ><span class="logo-image"></span></a>
			</li>
		</ul>
		<ul class="mainMenuContainer">
			<?php wp_nav_menu( array('menu' => 'mainMenu', 'container' => '','items_wrap' => '%3$s' )); ?>
		</ul>
		<ul class="mobile-menu-container">
			<li class="mobileMenuButton" onclick="this.parentNode.parentNode.classList.toggle('active')">
				<span class="mobileMenuTitle"><?php echo single_post_title(''); ?></span>
				<span class="mobileMenuIcon"></span>
			</li>
		</ul>

		<div id="searchSection" class="inputHidden">
			<form id="searchForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input id="searchField" type="search" name="s" onblur="changeVisibility(true)" onfocus="changeVisibility(false)">
				<span id="searchIcon" onclick="searchButtonClicked();"></span>
			</form>
		</div>
	</div>
</div>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
                    <div class="container">
					<!-- nav -->
                        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                            <div class="navbar-header visible-xs visible-sm">
                              <a href="#" class="mobile-navbar"><i class="fa fa-bars fa-2x"></i></a>
                            </div>
                            <div class="logo hidden-sm hidden-xs">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logoMENU.png" alt="Logo" class="logo-img">
                                </a>
                           </div>
                            <div class="menu-desktop-container hidden-sm hidden-xs"><?php html5blank_nav(); ?></div>
                             <div class="button-top-container hidden-sm hidden-xs">
                                <a class="btn btn-primary" href="#">Contattaci</a>
                            </div>
                            <div class="menu-mobile-container visible-xs visible-sm">
                                <a href="#" class="close-navbar"><i class="fa fa-times fa-2x"></i></a>
                                <?php html5blank_nav(); ?>
                            </div>
                        </nav>
                        
                    </div>
					<!-- /nav -->
                    
			</header>
			<!-- /header -->

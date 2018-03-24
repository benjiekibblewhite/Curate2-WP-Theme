<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>
		<?php wp_title(''); ?>
		<?php if(wp_title('', false)) { echo ' :'; } ?>
		<?php bloginfo('name'); ?>
	</title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:100,300,400" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
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
		<header class="header" role="banner">

			<!-- logo -->
			<div class="header-logo">
				<a href="<?php echo home_url(); ?>">

					<?php
								// check to see if the logo exists and add it to the page
								if ( get_theme_mod( 'your_theme_logo' ) ) : ?>

						<img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

						<?php // add a fallback if the logo doesn't exist
								else : ?>
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">

						<?php endif ?>
				</a>
			</div>
			<!-- /logo -->
			<!-- buttons -->
			<nav class="header-nav" role="navigation">
				<span class="header-button header-contact_phone">
					<?php
								if ( get_theme_mod( 'your_phone_number')) : ?>
						<a href="tel:<?php echo get_theme_mod( 'your_phone_number'); ?>">
							<?php echo get_theme_mod( 'your_phone_number');
								endif ?>
						</a>
				</span>
				<span class="header-button header-contact_email">
					<?php
								if ( get_theme_mod( 'your_email_address')) : ?>
						<a href="mailto:<?php echo get_theme_mod( 'your_email_address'); ?>">
							<?php echo get_theme_mod( 'your_email_address');
								endif ?>
						</a>
				</span>
				<div class="header-button nav-button_container">
					<button id="nav-button">MENU
						<i class="fas fa-bars"></i>
					</button>
				</div>
				<div class="nav-sidebar">
					<button id="close-nav-button">
						<i class="fas fa-times"></i>
					</button>
					<?php html5blank_nav(); ?>
				</div>
			</nav>
			<!-- /nav -->

		</header>
		<!-- /header -->

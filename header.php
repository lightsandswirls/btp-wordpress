<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2" />
	<meta name="format-detection" content="telephone=no">
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">

	<!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>

	<?php
	$post_slug = $post->post_name;
	$page_slug = 'page-' . $post_slug;
	$post_id   = 'post-id-' . $post->ID;
	$classes   = array( $page_slug, $post_id );
	?>

	<!-- Google Tag Manager -->

</head>

<body id="top-page" <?php body_class( $classes ); ?>>

	<!-- Google Tag Manager (noscript) -->

	<a href="#main-wrapper" class="skiplink" tabindex="1">Skip Navigation</a>

	<!-- Mobile Menu -->
	<div id="mobile-menu">
		<?php
		wp_nav_menu(
			array(
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => 'mmenu',
				'theme_location'  => 'mobile-menu',
				'menu_class'      => 'mobile-menu-panel',
			)
		);
		?>
	</div>
	<!-- Mobile Menu END -->

	<div id="panel">

		<header class="header">

			<div class="top-header-mobile d-block d-lg-none">

				<div class="container">

					<nav id="nav-mobile" class="navbar">

						<!-- Button triggering Mobile Nav -->
						<button class="navbar-toggle mobile-button" aria-label="Toggle navigation">
							<span class="menu__bar"></span>
							<span class="menu__bar"></span>
							<span class="menu__bar"></span>
						</button>
						<!-- Close Button -->
						<button class="close__mobileMenu" aria-label="close navigation">
							<span class="x"></span>
							<span class="x"></span>
						</button>

					</nav>
				
				</div>

			</div>

			<div class="top-header-desktop">

				<div class="container d-none d-lg-block">

					<div class="row">

						<div class="site-logo-wrap col-md-3">

						</div>

						<div class="col-md-9">

							<div class="desktop-menu">
								<nav id="nav-desktop" class="navbar navbar-expand-lg d-none d-lg-block">

									<?php
										wp_nav_menu(
											array(
												'container' => 'div',
												'container_class' => 'menu-container',
												'theme_location' => 'header-menu',
												'menu_class' => 'navbar-nav header-menu',
												'walker' => new WP_Bootstrap_Navwalker(),
											)
										)
										?>

								</nav>
							</div>
						</div>

					</div>

				</div>

			</div>

		</header>		

		<main class="main-wrapper" id="main-wrapper">
			
			<?php $id_attr = (get_field('article_id')) ? "id='".get_field('article_id')."'" : ""; ?>
			
			<article <?php echo $id_attr; ?>  class="pos-rel">

			<?php
			if ( is_front_page() ) {
				get_template_part( 'partials/hero-home' );
			}
			?>

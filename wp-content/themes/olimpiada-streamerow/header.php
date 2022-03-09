<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'fixed' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'olimpiada-streamerow' ); ?></a>

<div id="wrapper">
	<header>
		<nav id="header" class="navbar navbar-expand-md navbar-dark <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="nav__wrap">
				<div class="nav-brand navbar-loc header-padding row">
					<div class="col-5 col-xl-3 order-0">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/olimpiada.webp" alt="">
						</a>	
					</div>

					<div id="navbar" class="col-12 col-xl-auto order-3 order-xl-1">
						<?php
							// Loading WordPress Custom Menu (theme_location).
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'container'      => '',
									'menu_class'     => 'navbar-custom mx-auto',
									'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
									'walker'         => new WP_Bootstrap_Navwalker(),
								)
							);
						?>
					</div> 

					<div class="col-5 col-xl-3 order-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/poweredbytiger.webp" alt="">
					</div>
				</div>

				
				
				<!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main id="main" <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>
<?php if (!is_page_template( 'konkurs.php' )): ?>
<div class="aux">
	<div class="aux-left"></div>
	<div class="aux-right"></div>
</div>
<?php endif ;?>

<section class="s-hero">
	<div class="title">
		<div class="olives">
			<i class="olive-left"></i>
			<span>
				Igrzyska
			</span>
			<i class="olive-right"></i>
		</div>
		<span class="title--lower">rozpoczęte!</span>
	</div>
	<div class="s-hero__heroes">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/heroes.png" alt="">

	</div>
	<div class="scrolldown">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mouse.svg" alt="">
		<img class="scrolldown-chevron" src="<?php echo get_template_directory_uri(); ?>/assets/img/chevron.svg" alt="">
	</div>
</section>
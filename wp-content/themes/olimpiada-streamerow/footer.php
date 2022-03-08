			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
				</div><!-- /.container -->

			<?php
				endif;
			?>
		</main><!-- /#main -->
		<?php if (!is_page_template( 'konkurs.php' )): ?>
			<section class="s-dc">
				<div class="s-dc__tigerki">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tigerki-dc.webp" alt="">
				</div>
				<div class="s-dc__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-s4.webp" alt="">
				</div>
				<div class="discord">
					<div class="olives">
						<i class="olive-left"></i>
						<a class="button text-white" target="_blank" href="https://discord.gg/geHDwRaHKt">Wbij na Discord</a>
						<i class="olive-right"></i>
					</div>
				</div>
			</section>
		<?php endif ;?>
		<footer id="footer">
			<div class="nav__wrap">
				<div class="nav-brand footer-padding">
					<div class="footer-cfa">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-cfa.png" alt="">
					</div>
					<div class="footer-tiger">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-tiger.png" alt="">
					</div>
				</div>
					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => 'col-md-6',
									'fallback_cb'     => '',
									'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
									//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
								)
							);
						endif;
					?>
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>

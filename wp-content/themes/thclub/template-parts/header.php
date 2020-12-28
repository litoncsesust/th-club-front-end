<div class="top-bar-container" data-sticky-container>
	<div class="sticky" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;">
		<header class="site-header color-bg-white" role="banner">
			<div class="grid-container no-padding">
				<div class="grid-x">
					<div class="cell">
						<div class="site-title-bar title-bar" <?php fiftytwo_title_bar_responsive_toggle(); ?>>
							<div class="title-bar-left">
								<button aria-label="<?php _e( 'Main Menu', 'fiftytwo' ); ?>" class="menu-icon" type="button" data-toggle="<?php fiftytwo_mobile_menu_id(); ?>"></button>
								<span class="site-mobile-title title-bar-title">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								</span>
							</div>
						</div>
						<nav class="site-navigation top-bar" role="navigation" id="<?php fiftytwo_mobile_menu_id(); ?>">
							<div class="top-bar-left">
								<div class="site-desktop-title top-bar-title no-margin">
									<a class="logo contain no-repeat left-center" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								</div>
							</div>
							<div class="top-bar-right">
								<?php fiftytwo_top_bar_r(); ?>
								<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
								<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
								<?php endif; ?>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
	</div>
</div>
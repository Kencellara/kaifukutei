<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="masthead" class="site-header">

			<div class="main-header main-header-original l-mainHeader">
				<div class="main-header-content">
					<div class="site-branding">
						<div class="p-siteHeaderImg">
							<a href="<?= home_url() ?>">
								<img src="<?= wp_upload_dir()['baseurl'] . '/header/header_1.png' ?>">
							</a>
						</div>
					</div><!-- .site-branding -->

					<!-- スマホのみ -->
					<button class="drawer-hamburger">
						<span class="screen-reader-text"><?php esc_html_e('Menu', 'businesspress'); ?></span>
						<span class="drawer-hamburger-icon"></span>
					</button>

				</div><!-- .main-header-content -->

				<!-- スマホのみ -->
				<div class="drawer-overlay"></div>
				<div class="drawer-navigation">
					<div class="drawer-navigation-content">
						<?php businesspress_main_navigation(); ?>
					</div><!-- .drawer-navigation-content -->
				</div><!-- .drawer-navigation -->
			</div><!-- .main-header -->

			<div class="l-globalMenuArea">
				<nav class="p-globalMenu">
					<ul>
						<li>魚種</li>
						<li>料理</li>
						<li>味付</li>
						<li>調理器具</li>
						<li>このブログの説明</li>
					</ul>
				</nav>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content l-siteContent <?php if (is_paged()) echo 'isPaged' ?>">
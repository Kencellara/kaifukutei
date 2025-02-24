<?php

function kence_setup(): void
{
	// titleタグを自動生成（ headに書かなくてもいい ）
	add_theme_support( 'title-tag' );

	// アイキャッチ画像を有効にする
	// thumbnail: 150, 150
	// medium: 300, 300
	// large: 1024, 1024
	// full: 元サイズ
	add_theme_support( 'post-thumbnails' );


	// 全て HTML5 にする
	add_theme_support(
		'html5', 
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]
	);

	// ブロックエディターで「幅広」「全幅」を選択できるようにする
	add_theme_support( 'align-wide' );

	// エディタにスタイルを適用
	add_theme_support( 'editor-styles' );
	add_editor_style(['assets/css/editor-style.css']);
}
add_action( 'after_setup_theme', 'kence_setup' );

/**
 * Enqueue scripts and styles.
 */
function kence_scripts(): void
{
	wp_enqueue_style('fontawesome', get_theme_file_uri('/lib/font-awesome_6/css/all.min.css'), [], '6.1.1');

	// style.cssはテーマ直下に置かないと効かない
	wp_enqueue_style('kence-style', get_stylesheet_uri(), [], '1.0.1');

	// 共通css
	wp_enqueue_style('common-style', get_theme_file_uri('/assets/css/common.css'), [], '1.0.2');
	wp_enqueue_style('header-style', get_theme_file_uri('/assets/css/header.css'), [], '1.0.1');
	wp_enqueue_style('footer-style', get_theme_file_uri('/assets/css/footer.css'), [], '1.0.1');

	// 共通js
	wp_enqueue_script('hamburger-menu', get_theme_file_uri('/assets/js/hamburger-menu.js'), [], '1.0.1', /* footer= */ true);
	wp_enqueue_script('fix-header', get_theme_file_uri('/assets/js/fix-header.js'), ['jquery'], '1.0.1');
	wp_enqueue_script('scroll-to-top', get_theme_file_uri('/assets/js/scroll-to-top.js'), ['jquery'], '1.0.1');

	if (is_front_page()) {
		wp_enqueue_style('front-page-style', get_theme_file_uri('/assets/css/front-page.css'), [], '1.1');
		wp_enqueue_style('slick-style', get_theme_file_uri('/lib/slick/slick.css'), [], '1.9.0');
		wp_enqueue_script('slick', get_theme_file_uri('/lib/slick/slick.js'), ['jquery'], '1.9.0');
		wp_enqueue_script('my-slick', get_theme_file_uri('/assets/js/slick.js'), [], '1.0.1', /* footer= */ true);
	}

	if (is_single()) {
		wp_enqueue_style('news-style', get_theme_file_uri('/assets/css/news.css'), [], '1.0.1');
	}

	if (is_page('menu')) {
		wp_enqueue_style('menu-style', get_theme_file_uri('/assets/css/menu.css'), [], '1.0.1');
	}
	
	if (is_page('shop-info')) {
		wp_enqueue_style('shop-info-style', get_theme_file_uri('/assets/css/shop-info.css'), [], '1.0.1');
	}

	if (is_page('history')) {
		wp_enqueue_style('history-style', get_theme_file_uri('/assets/css/history.css'), [], '1.0.1');
	}

	if (is_home()) {
		wp_enqueue_style('archive-style', get_theme_file_uri('/assets/css/archive.css'), [], '1.0.1');
	}

	if (is_404()) {
		wp_enqueue_style('404-style', get_theme_file_uri('/assets/css/404.css'), [], '1.0.1');
	}
}
add_action( 'wp_enqueue_scripts', 'kence_scripts' );

// ファビコン設定
function faviconUrl(): ?string
{
	return get_theme_file_uri('/assets/images/favicon/favicon.ico');
}
add_filter('get_site_icon_url', 'faviconUrl');


/**
 * Custom template tags for this theme.
 */
require get_theme_file_path( '/inc/template-tags.php' );

/**
 * Custom template tags for this theme.
 */
require get_theme_file_path('/inc/shortcodes.php');

/**
 * Custom widgets for this theme.
 */
require get_theme_file_path( '/inc/widgets.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
// require get_theme_file_path( '/inc/extras.php' );

/**
 * Customizer additions.
 */
require get_theme_file_path('/inc/customizer.php');

/**
 * Set CSS for Customizer options.
 */
require get_theme_file_path('/inc/customizer-css.php');

/**
 * Load Jetpack compatibility file.
 */
require get_theme_file_path( '/inc/jetpack.php' );
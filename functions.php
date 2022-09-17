<?php

function kence_setup(): void
{
	// titleタグを自動生成（ headに書かなくてもいい ）
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 840, 0, false );
	add_image_size( 'businesspress-post-thumbnail-large', 1280, 540, true );
	add_image_size( 'businesspress-post-thumbnail-medium', 482, 318, true );
	add_image_size( 'businesspress-post-thumbnail-list', 482, 361, true );
	add_image_size( 'businesspress-post-thumbnail-small', 80, 60, true );
	add_image_size( 'businesspress-post-thumbnail-eyecatch', 1200, 800, true );
	add_image_size( 'businesspress-post-thumbnail-square', 260, 236, true );

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
	wp_enqueue_style( 'fontawesome', get_theme_file_uri( '/inc/font-awesome_6/css/all.min.css' ), [], '6.1.1' );
	// wp_enqueue_style( 'normalize', get_theme_file_uri( '/css/normalize.css' ),  [], '8.0.0' );
	wp_enqueue_style( 'businesspress-style', get_stylesheet_uri(), [], '1.0.0' );

	// Additional styles for kence_theme
	// wp_enqueue_style('base-style', get_theme_file_uri('/css/base.css'), [], '1.0.0');
	// wp_enqueue_style('header-style', get_theme_file_uri('/css/header.css'), [], '1.0.0');
	// wp_enqueue_style('footer-style', get_theme_file_uri('/css/footer.css'), [], '1.0.0');
	// wp_enqueue_style('sidebar-style', get_theme_file_uri('/css/sidebar.css'), [], '1.0.0');
	if ( is_home() ) {
		wp_enqueue_style('front-page-style', get_theme_file_uri('/css/front-page.css'), [], '1.0.0');
		wp_enqueue_script( 'slick', get_theme_file_uri( '/js/slick.js' ), array( 'jquery' ), '1.9.0', true );
		wp_enqueue_style( 'slick-style', get_theme_file_uri( '/css/slick.css' ), [], '1.9.0' );
	}
	if ( is_single() ) {
		// wp_enqueue_style('single-style', get_theme_file_uri('/css/single.css'), [], '1.0.0');
	}
	if ( is_archive() ) {
		// wp_enqueue_style('archive-style', get_theme_file_uri('/css/archive.css'), [], '1.0.0');
	}

	// wp_enqueue_script( 'businesspress-functions', get_theme_file_uri( '/js/functions.js' ), array( 'jquery' ), '1.0.0', true );
	// wp_enqueue_script( 'businesspress-navigation', get_theme_file_uri( '/js/navigation.js' ), array( 'jquery' ), '1.0.0', true );
	// $businesspress_l10n = [];
	// $businesspress_l10n['expand']         = __( 'Expand child menu', 'businesspress' );
	// $businesspress_l10n['collapse']       = __( 'Collapse child menu', 'businesspress' );
	// wp_localize_script( 'businesspress-navigation', 'businesspressScreenReaderText', $businesspress_l10n );
	// wp_enqueue_script( 'businesspress-skip-link-focus-fix', get_theme_file_uri( '/js/skip-link-focus-fix.js' ), [], '20160525', true );
}
add_action( 'wp_enqueue_scripts', 'kence_scripts' );

// ファビコン設定
function faviconUrl(): string
{
	return get_template_directory_uri() . '/assets/favicon.png';
}
add_filter( 'get_site_icon_url', 'faviconUrl' );


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
require get_theme_file_path( '/inc/extras.php' );

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
// require get_theme_file_path( '/inc/jetpack.php' );
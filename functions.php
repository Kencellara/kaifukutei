<?php

// if ( ! function_exists( 'businesspress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function businesspress_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'businesspress', get_theme_file_path( '/languages' ) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 840, 0, false );
	add_image_size( 'businesspress-post-thumbnail-large', 1280, 540, true );
	add_image_size( 'businesspress-post-thumbnail-medium', 482, 318, true );
	add_image_size( 'businesspress-post-thumbnail-list', 482, 361, true );
	add_image_size( 'businesspress-post-thumbnail-small', 80, 60, true );
	
	// FIXME: 効かない？
	add_image_size( 'businesspress-post-thumbnail-eyecatch', 1200, 800, true );
	add_image_size( 'businesspress-post-thumbnail-square', 260, 236, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 720;

	// This theme uses wp_nav_menu().
	register_nav_menus( array(
		'primary'       => esc_html__( 'Main Navigation', 'businesspress' ),
		'header-social' => esc_html__( 'Header Social Links', 'businesspress' ),
		'footer'        => esc_html__( 'Footer Menu', 'businesspress' ),
		'footer-social' => esc_html__( 'Footer Social Links', 'businesspress' ),
	) );
	
	// Switch default core markup to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Setup the WordPress core custom header feature.
	add_theme_support( 'custom-header', apply_filters( 'businesspress_custom_header_args', array(
		'default-image' => get_parent_theme_file_uri( '/images/header.jpg' ),
		'width'         => 1280,
		'height'        => 540,
		'flex-width'    => true,
		'flex-height'   => true,
		'header-text'   => false,
	) ) );
	register_default_headers( array(
	'default-image' => array(
		'url'           => '%s/images/header.jpg',
		'thumbnail_url' => '%s/images/header.jpg',
		'description'   => __( 'Default Header Image', 'businesspress' )
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for full width images
	add_theme_support( 'align-wide' );

	// This theme styles the visual editor to resemble the theme style.
	add_theme_support( 'editor-styles' );
	add_editor_style( array( 'css/editor-style.css' ) );
	
}
// endif; // businesspress_setup
add_action( 'after_setup_theme', 'businesspress_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function businesspress_widgets_init() {
	// register_sidebar(array(
	// 	'name'          => 'アーカイブ',
	// 	'id'            => 'kt-archives',
	// 	'description'   => 'アーカイブ表示用',
	// ));
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Blog Sidebar', 'businesspress' ),
	// 	'id'            => 'sidebar-1',
	// 	'description'   => esc_html__( 'This is the normal sidebar for blog pages. If you do not use this sidebar or Blog Sticky Sidebar, blog pages will be a one-column design.', 'businesspress' ),
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Blog Sticky Sidebar', 'businesspress' ),
	// 	'id'            => 'sidebar-1-s',
	// 	'description'   => esc_html__( 'Displays while following the PC\'s scrolling.', 'businesspress' ),
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Page Sidebar', 'businesspress' ),
	// 	'id'            => 'sidebar-page',
	// 	'description'   => esc_html__( 'This is the normal sidebar for static pages. If you do not use this sidebar or Page Sticky Sidebar, static pages will be a one-column design.', 'businesspress' ),
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Page Sticky Sidebar', 'businesspress' ),
	// 	'id'            => 'sidebar-page-s',
	// 	'description'   => esc_html__( 'Displays while following the PC\'s scrolling.', 'businesspress' ),
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );

	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer 1', 'businesspress' ),
	// 	'id'            => 'footer-1',
	// 	'description'   => __( 'You can set the width of footers from Customize. If you do not use a footer widget, nothing will be displayed.', 'businesspress' ),
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer 2', 'businesspress' ),
	// 	'id'            => 'footer-2',
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer 3', 'businesspress' ),
	// 	'id'            => 'footer-3',
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer 4', 'businesspress' ),
	// 	'id'            => 'footer-4',
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer 5', 'businesspress' ),
	// 	'id'            => 'footer-5',
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer 6', 'businesspress' ),
	// 	'id'            => 'footer-6',
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
}
add_action( 'widgets_init', 'businesspress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kence_scripts() {
	wp_enqueue_style( 'fontawesome', get_theme_file_uri( '/inc/font-awesome_6/css/all.min.css' ), array(), '6.1.1' );
	wp_enqueue_style( 'normalize', get_theme_file_uri( '/css/normalize.css' ),  array(), '8.0.0' );
	wp_enqueue_style( 'businesspress-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Additional styles for kence_theme
	wp_enqueue_style('base-style', get_theme_file_uri('/css/base.css'), array(), '1.0.0');
	wp_enqueue_style('header-style', get_theme_file_uri('/css/header.css'), array(), '1.0.0');
	wp_enqueue_style('footer-style', get_theme_file_uri('/css/footer.css'), array(), '1.0.0');
	wp_enqueue_style('sidebar-style', get_theme_file_uri('/css/sidebar.css'), array(), '1.0.0');
	if ( is_home() ) {
		wp_enqueue_style('front-page-style', get_theme_file_uri('/css/front-page.css'), array(), '1.0.0');
	}
	if ( is_singular() ) {
		wp_enqueue_style('single-style', get_theme_file_uri('/css/single.css'), array(), '1.0.0');
	}
	if ( is_archive() ) {
		wp_enqueue_style('archive-style', get_theme_file_uri('/css/archive.css'), array(), '1.0.0');
	}

	wp_enqueue_script( 'fitvids', get_theme_file_uri( '/js/jquery.fitvids.js' ), array(), '1.1', true );
	if ( is_home() && ! is_paged() && get_theme_mod( 'businesspress_enable_featured_slider' ) ) {
		wp_enqueue_script( 'slick', get_theme_file_uri( '/js/slick.js' ), array( 'jquery' ), '1.9.0', true );
		wp_enqueue_style( 'slick-style', get_theme_file_uri( '/css/slick.css' ), array(), '1.9.0' );
	}
	if ( is_active_sidebar( 'sidebar-1-s' ) || is_active_sidebar( 'sidebar-page-s' ) ) {
		wp_enqueue_script( 'stickyfill', get_theme_file_uri( '/js/stickyfill.js' ), array( 'jquery' ), '2.1.0' );
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'businesspress-functions', get_theme_file_uri( '/js/functions.js' ), array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'businesspress-navigation', get_theme_file_uri( '/js/navigation.js' ), array( 'jquery' ), '1.0.0', true );
		$businesspress_l10n = array();
		$businesspress_l10n['expand']         = __( 'Expand child menu', 'businesspress' );
		$businesspress_l10n['collapse']       = __( 'Collapse child menu', 'businesspress' );
		wp_localize_script( 'businesspress-navigation', 'businesspressScreenReaderText', $businesspress_l10n );
	wp_enqueue_script( 'businesspress-skip-link-focus-fix', get_theme_file_uri( '/js/skip-link-focus-fix.js' ), array(), '20160525', true );
}
add_action( 'wp_enqueue_scripts', 'kence_scripts' );

/**
 * Add custom classes to the body.
 */
function businesspress_body_classes( $classes ) {

	if ( get_theme_mod( 'businesspress_hide_blogname' ) ) {
		$classes[] = 'hide-blogname';
	}
	if ( get_theme_mod( 'businesspress_hide_blogdescription' ) ) {
		$classes[] = 'hide-blogdescription';
	}
	if ( get_theme_mod( 'businesspress_hide_date' ) ) {
		$classes[] = 'hide-date';
	}
	if ( get_theme_mod( 'businesspress_hide_author' ) ) {
		$classes[] = 'hide-author';
	}
	if ( get_theme_mod( 'businesspress_hide_comments_number' ) ) {
		$classes[] = 'hide-comments-number';
	}

	if ( ( is_home()    && '3-column' == get_theme_mod( 'businesspress_content' ) ) ||
		 ( is_archive() && '3-column' == get_theme_mod( 'businesspress_content_archive' ) ) ||
		 ( is_search()  && '3-column' == get_theme_mod( 'businesspress_content_search' ) ) ) {
		$classes[] = 'three-column';
	} elseif ( ( ( is_home() || is_archive() || is_search() || is_single() ) && ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-1-s' ) ) ) ||
			   ( is_page() && ( is_active_sidebar( 'sidebar-page' ) || is_active_sidebar( 'sidebar-page-s' ) ) && ! is_page_template( 'nosidebar.php' ) ) ) {
		$classes[] = 'has-sidebar';
	} else {
		$classes[] = 'no-sidebar';
	}

	if ( ( is_home()    && '2-column' == get_theme_mod( 'businesspress_content' ) ) ||
		 ( is_archive() && '2-column' == get_theme_mod( 'businesspress_content_archive' ) ) ||
		 ( is_search()  && '2-column' == get_theme_mod( 'businesspress_content_search' ) ) ) {
		$classes[] = 'two-column';
	}

	if ( get_option( 'show_avatars' ) ) {
		$classes[] = 'has-avatars';
	}

	return $classes;
}
add_filter( 'body_class', 'businesspress_body_classes' );

/**
 * 関連記事取得
 */
function fetchRelatedPosts(int $postCount): array
{
	global $post;
	
	$cats = get_the_category();
	$catsChildren = array_filter($cats, function($cat) {
		return $cat->parent !== 1;
	});

	$randNum = mt_rand(0, count($catsChildren) - 1);
	$catId = $catsChildren[$randNum]->term_id;

	$relatedPosts = get_posts([
		'posts_per_page' => $postCount,
		'category' => $catId,
		'orderby' => 'rand',
		'exclude' => $post->ID
	]);

	return $relatedPosts;
}

// カテゴリー取得
function fetchCategories(array $slugList): array
{
	$catsArr = [];

	foreach($slugList as $slug) {
		$cat = get_category_by_slug($slug);
		array_push($catsArr, $cat);
	}

	return $catsArr;
}

// 子カテゴリー取得
function fetchCategoryChildren(string $parentSlug): array
{
	$catParent = get_category_by_slug($parentSlug);

	$catChildren = get_categories([
		'parent' => $catParent->term_id
	]);

	return $catChildren;
}

/* the_archive_title の余計な文字を削除 */
function removePrefixOfArchiveTitle(): ?string
{
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_date()) {
		$title = get_the_time('Y年n月');
	// } elseif (is_search()) {
	// 	$title = '検索結果：' . esc_html(get_search_query(false));
	// } elseif (is_404()) {
	// 	$title = '「404」ページが見つかりません';
	} else {
		$title = '';
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'removePrefixOfArchiveTitle' );

// ファビコン設定
function faviconUrl(): ?string
{
	return wp_upload_dir()['baseurl'] . '/favicon/favicon.png';
}
add_filter( 'get_site_icon_url', 'faviconUrl' );


/* 記事内関連記事カード */
function createRelatedPostCard($atts) {
	extract(shortcode_atts(array('slug'=>''), $atts));
	$post = get_posts([
		'name'           => $slug,
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 1
	])[0];
	$postEyecatch = get_the_post_thumbnail($post->ID, 'full');

	$relatedPostCard = <<<HTML
		<div class="p-relatedPostCard">
			<a class="p-relatedPostLink" href="{ $post->guid }" target="_self" rel="next">
				<div class="a-relatedPostThumbnail">
					$postEyecatch
				</div>
				<div class="p-relatedPostText">
					<div class="a-relatedPostTitle">
						$post->post_title
					</div>
				</div>
			</a>
		</div>
		HTML;

	return $relatedPostCard;
}

// 使い方
// [related_post slug='']
add_shortcode("related_post", "createRelatedPostCard");

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
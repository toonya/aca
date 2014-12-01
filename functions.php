<?php
// ----------------------------------------
// ! init
// ----------------------------------------
function aca_theme_setup() {

	load_theme_textdomain( 'aca', get_template_directory() . '/languages' );

	register_nav_menus(
		array(
		  'header-menu' => __( '桌面版导航' ),
		  'mobile-menu' => __( '移动端导航' ),
		)
	);

	add_theme_support( 'post-thumbnails' );

    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );

    set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'aca-full-width', 1038, 576, true );
}

add_action( 'after_setup_theme', 'aca_theme_setup' );


function coolwp_remove_open_sans_from_wp_core() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    wp_enqueue_style('open-sans','');
}
add_action( 'init', 'coolwp_remove_open_sans_from_wp_core' );
add_action( 'admin_enqueue_scripts', 'coolwp_remove_open_sans_from_wp_core' );

// ----------------------------------------
// ! some support.
// ----------------------------------------
require_once('inc/core.php');
require_once('inc/add-setting.php');
require_once('inc/bootstrap-nav.php');
require_once('inc/remove-origin.php');
require_once('inc/change-login-area.php');
require_once('inc/dashboard.php');



if(is_admin()){
	require_once('inc/img-management.php');

	new TY_img_management('zh','中文','图片规格描述,未添加');
	new TY_img_management('en','英文','图片规格描述,未添加');
}

// ----------------------------------------
// ! add menu management
// ----------------------------------------
add_action( 'admin_menu', 'admin_menu_page' );

function admin_menu_page(){
    add_menu_page( '导航菜单', '导航菜单', 'manage_options', 'nav-menus.php', '', '', 99 );
    add_menu_page( '新闻', '新闻', 'manage_options', 'edit.php', '', '', 1 );
}

// ----------------------------------------
// ! remove page metabox
// ----------------------------------------
function page_remove_parent_meta_boxes() {
    remove_meta_box('pageparentdiv', 'page', 'side');
}
//add_action( 'admin_menu', 'page_remove_parent_meta_boxes' );


// ----------------------------------------
// ! load bootstrap select component
// ----------------------------------------
function load_bootstrap_select() {

	global $post;

	if ( !(empty($post)) && in_array( $post->post_name, array( 'ask' ) ) )
	{

		wp_enqueue_style( 'bootstrap-select-style', get_template_directory_uri() . '/inc/css/bootstrap-select.css' );
		wp_enqueue_script( 'bootstrap-select-js', get_template_directory_uri() . '/inc/js/bootstrap-select.js', array('jquery'), '1.0.0', true );

	}
}

add_action( 'wp_enqueue_scripts', 'load_bootstrap_select' );


function theme_name_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	if( !is_front_page() )
		$title .= ' | ' . get_bloginfo( 'name', 'display' );
	else
		$title .= get_bloginfo( 'name', 'display' );

	return $title;
}
add_filter( 'wp_title', 'theme_name_wp_title', 10, 2 );


// ----------------------------------------
// ! get language list
// ----------------------------------------

function get_language_list() {
	if(function_exists('pll_the_languages')) {
		$language_info = pll_the_languages(array('raw'=>1));
		$langs_html = '';

		foreach ($language_info as $key => $lang) {
			$is_current = (pll_current_language()==$lang['slug'])? ' class="current-language"':'';
			if($key != 0) $langs_html .= ' / ';
			$langs_html .= '<a'.$is_current.' href="'.$lang['url'].'">'.$lang['name'].'</a>';
		}

		return $langs_html;
	}

	else {
		return false;
	}
}

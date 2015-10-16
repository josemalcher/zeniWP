<?php

add_action('init', 'zeniwp_init');

function zeniwp_init(){
    zeniwp_register_menus();
}

function zeniwp_register_menus(){
    register_nav_menu('menu-primario','Menu Principal (Topo)');
}

//Carrega os arquivos Css e JS
add_action('wp_enqueue_scripts', 'zeniwp_enqueue_scripts');
function zeniwp_enqueue_scripts() {
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_style('jq.tweet', get_stylesheet_directory_uri() . '/css/jquery.tweet.css');
    wp_enqueue_style('superfish', get_stylesheet_directory_uri() . '/css/superfish.css');
    wp_enqueue_style('prettyPhoto', get_stylesheet_directory_uri() . '/js/prettyPhoto/css/prettyPhoto.css');
    wp_enqueue_style('poshytip', get_stylesheet_directory_uri() . '/js/poshytip-1.1/src/jquery.poshytip.min.js');
    wp_enqueue_style('flexslider', get_stylesheet_directory_uri() . '/css/flexslider.css');
    wp_enqueue_style('less', get_stylesheet_directory_uri() . '/css/lessframework.css');
    wp_enqueue_style('skin', get_stylesheet_directory_uri() . '/css/skin.css');
  
    wp_enqueue_script('css3mediaqueries', get_stylesheet_directory_uri() . '/js/css3-mediaqueries.js', array('jquery'));
    
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js');
    wp_enqueue_script('tabs', get_stylesheet_directory_uri() . '/js/tabs.js');
    wp_enqueue_script('jq.tweet-js', get_stylesheet_directory_uri() . '/js/tweet/jquery.tweet.js');
    wp_enqueue_script('hoverintent', get_stylesheet_directory_uri() . '/js/superfish-1.4.8/js/hoverIntent.js');
    wp_enqueue_script('superfish', get_stylesheet_directory_uri() . '/js/superfish-1.4.8/js/superfish.js');
    wp_enqueue_script('supersubs', get_stylesheet_directory_uri() . '/js/superfish-1.4.8/js/supersubs.js');
    wp_enqueue_script('jsPrettyPhoto', get_stylesheet_directory_uri() . '/js/prettyPhoto/js/jquery.prettyPhoto.js');
    wp_enqueue_script('jsposhytip', get_stylesheet_directory_uri() . '/js/poshytip-1.1/src/jquery.poshytip.min.js');
    wp_enqueue_script('jsflexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js');
    wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js');
}

//corta imagens
add_image_size('post-thumb', 540, 266, true);

//adiciona imagens destacadas para ser postada
add_theme_support('post-thumbnails');

//conrtaola quantidade de textos no post
// se o texto estiver no Resumo, ele parecerá na integra!
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length() {
	return 50;
}

add_theme_support('menus');

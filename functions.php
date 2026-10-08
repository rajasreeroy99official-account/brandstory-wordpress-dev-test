<?php
if (!defined('ABSPATH')) exit;
function brandstory_setup(){
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');
 add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
 register_nav_menus(['primary'=>'Primary Menu']);
}
add_action('after_setup_theme','brandstory_setup');
function brandstory_assets(){
 wp_enqueue_style('brandstory-style', get_stylesheet_uri(), [], '1.0.0');
 wp_enqueue_script('brandstory-js', get_template_directory_uri().'/assets/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts','brandstory_assets');

function brandstory_menu_fallback(){ echo '<ul class="menu"><li><a href="#services">Digital marketing</a></li><li><a href="#about">Design</a></li><li><a href="#services">Content</a></li><li><a href="#cases">Production</a></li><li><a href="#faq">Technology</a></li><li><a href="#locations">Resources</a></li></ul>'; }
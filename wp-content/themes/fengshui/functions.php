<?php

function fengshui_resources(){
	wp_enqueue_style('style',get_stylesheet_uri());
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), true );
	wp_enqueue_script('script',get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts','fengshui_resources');

register_nav_menus(array('primary'=>__('Primary Menus')));
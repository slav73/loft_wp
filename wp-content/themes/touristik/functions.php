<?php

add_action( 'wp_enqueue_scripts', 'touristic_scripts');

function touristic_scripts() {

    wp_enqueue_style( 'lib', get_stylesheet_directory_uri() . '/css/libs.min.css', array(), null);
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() .'/css/main.css', array('lib'), time());
    wp_enqueue_style( 'media', get_stylesheet_directory_uri() .'/css/media.css', array('lib', 'main'), null);

     wp_enqueue_script('jquery');
     wp_enqueue_script('main', get_stylesheet_directory_uri() .'/js/main.js', 'jquery', null, true);
}

add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'head_menu' => 'Шапка сайта',
        'foot_menu' => 'Футер сайта'
    )
);

function true_register_wp_sidebars() {
 
	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'true-side', // уникальный id
			'name' => 'Боковая колонка', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);
}
 
add_action( 'widgets_init', 'true_register_wp_sidebars' );

function register_wp_sidebars() {
 
	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'calendar', // уникальный id
			'name' => 'Календарная колонка', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);
}
 
add_action( 'widgets_init', 'register_wp_sidebars' );

add_filter( 'excerpt_length', function(){
	return 10;
} );

//add_image_size( 'posts', 270, 190, true );
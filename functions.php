<?php
function add_css()
{
	wp_register_style('icomoon', get_template_directory_uri() . '/assets/fonts/icomoon/style.css', false, '1.1', 'all');
	wp_enqueue_style('icomoon');
	wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.1', 'all');
	wp_enqueue_style('bootstrap');
	wp_register_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', false, '1.1', 'all');
	wp_enqueue_style('jquery-ui');
	wp_register_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', false, '1.1', 'all');
	wp_enqueue_style('owl.carousel');
	wp_register_style('owl.theme.default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', false, '1.1', 'all');
	wp_enqueue_style('owl.theme.default');
	wp_register_style('jquery.fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', false, '1.1', 'all');
	wp_enqueue_style('jquery.fancybox');
	wp_register_style('bootstrap-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css', false, '1.1', 'all');
	wp_enqueue_style('bootstrap-datepicker');
	wp_register_style('flaticon', get_template_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css', false, '1.1', 'all');
	wp_enqueue_style('flaticon');
	wp_register_style('aos', get_template_directory_uri() . '/assets/css/aos.css', false, '1.1', 'all');
	wp_enqueue_style('aos');
	wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', false, '1.1', 'all');
	wp_enqueue_style('style');


	wp_register_style('Nunito-Google-Font', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Nunito:300,400,700', false, '1.1', 'all');
	wp_enqueue_style('Nunito-Google-Font');
}
add_action('wp_enqueue_scripts', 'add_css');


function add_script()
{
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jquery');
	wp_register_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jquery-ui');
	wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'popper');
	wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'bootstrap');
	wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'owl-carousel');
	wp_register_script('jquery-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jquery-countdown');
	wp_register_script('bootstrap-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'bootstrap-datepicker');
	wp_register_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jquery-easing');
	wp_register_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'aos');
	wp_register_script('jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jquery-fancybox');
	wp_register_script('jquery-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jquery-sticky');
	wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'main');
}
add_action('wp_enqueue_scripts', 'add_script');


add_theme_support( 'menus' );
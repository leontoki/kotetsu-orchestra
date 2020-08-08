<?php

register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

function enqueue_scripts() {
  wp_enqueue_style('main-css' , get_stylesheet_uri());
  wp_enqueue_style('fontawesome' ,"https://use.fontawesome.com/releases/v5.6.1/css/all.css");
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/scripts/script.js', array(),'', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

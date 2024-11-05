<?php
// INCLUDE STYLESHEET AND SCRIPT FILE//
function get_setup()
{
    wp_enqueue_style('style',get_stylesheet_uri('style.css'));
    wp_enqueue_script("main",get_theme_file_uri('script.js'));
}
add_action('wp_enqueue_scripts','geet_setup');//hook

//constome post widget//
function get_custom()
    {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag')    
    }
    add_action('after_setup_theme','get_custom');

                    //CREATE MENU IN ADMIN DAPENAL(DASHBOARD)//
    ragister_nav_menus(arry('primary-menu'=>'Main menu'))
?>

<?php
function get_setup()
{
    wp_enqueue_style('style',get_stylesheet_uri('style.css'));
    wp_enqueue_script("main",get_theme_file_uri('script.js'));
}
add_action('wp_enqueue_scripts','geet_setup');//hook
?>
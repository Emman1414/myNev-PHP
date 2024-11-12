<?php

function myNev_assets(){
    wp_enqueue_style('myAssets', get_template_directory_uri() . '/css/style.css', microtime());
}

add_action('wp_enqueue_scripts', 'myNev_assets');
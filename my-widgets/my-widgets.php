<?php
/**
 * Plugin name: My Widgets
 * Description: A personalized plugin for add elementos widgets
 * Version: 1.0.0
 * Author: Percy Benavides Murillo
 */

if(!defined("ABSPATH")){
    exit;
}

function add_elementor_widget_categories($elements_manager){
    $elements_manager->add_category("my-widgets",[
        "title"=> __("My Widgets","my-widgets"),
        "icon"=> "fa fa-plug",
    ]);
}

add_action("elementor/elements/categories_registered","add_elementor_widget_categories");

function my_widget_register_script(){
    wp_register_script("sketchfab-script", plugins_url("assets/js/sketchfab.js", __FILE__),["jquery"], "1.0.0", true);
    wp_register_style("sketchfab-style", plugins_url("assets/styles/css/sketchfab.css", __FILE__),[], "1.0.0", "all");
}
add_action("wp_enqueue_scripts", "my_widget_register_script");
add_action("elementor/editor/after_enqueue_scripts", "my_widget_register_script");

require_once plugin_dir_path( __FILE__ ) ."/widgets/sketchfab.php";
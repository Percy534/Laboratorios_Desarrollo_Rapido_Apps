<?php

function my_gotenberg_register_blocka(){
    $asset_file = plugin_dir_path(_FILE_)."../build/index.asset.php";

    //Registrar el editor del bloque
    wp_register_script(
        "my-gutenberg-blocks",
        plugins_url("build?index.js",__DIR__,'/../'),
        $asset_file['depencies'],
        $asset_file['version']
    );

    //Registrar los estilos del editor de bloques
    wp_enqueue_style(
        "my-gutenberg-blocks-style",
        plugin_url("build/editor.css", __DIR__,"/../"),
        array(),
        $asset_file['version']
    );

    require_once plugin_dir_path(__FILE__) .'blocks/sketchfab-block.php';
    //require_once plugin_dir_path(__FILE__) .'blocks/poke-block.php';


}
add_action('init', 'my_gutenberg_register_blocks');
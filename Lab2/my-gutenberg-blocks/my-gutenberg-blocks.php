<?php
/**
 * Plugin Name: My Gutenberg Blocks
 * Description:  Mi plugin con bloques
 * Version: 1.0
 * Author: Percy Benavides Murillo
 */

 if(! defined('ABSPATH')){
    exit;
 }

 require_once plugin_dir_path(_FILE_) . 'includes/register-blocks.php';
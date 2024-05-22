<?php
/**
 * Theme Functions
 * @package Jagoron
 */
//print_r( filemtime(get_template_directory() ."/style.css"));
function jagoron_enqueue_scripts() {
    //wp_enqueue_style("stylesheet", get_template_directory_uri() ."/style.css");
    wp_enqueue_style("stylesheet", get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');//(name, path, ['dependency'],version number,media='all'/'print'/'screen'/'(max-width:640px)'/'(orientation:portrait)')
}
add_action("wp_enqueue_scripts","jagoron_enqueue_scripts");
?>
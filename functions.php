<?php
/**
 * Theme Functions
 * @package Jagoron
 * Here Comments are important documents to understand in future. So don't delete them.
 */
if (!defined("JAGORON_DIR_PATH")) {
    define("JAGORON_DIR_PATH", untrailingslashit(get_template_directory()));
}
//print_r(JAGORON_DIR_PATH);
require_once (JAGORON_DIR_PATH . '/inc/helpers/autoloader.php');

function jagoron_get_theme_instance()
{
    \JAGORON_THEME\Inc\JAGORON_THEME::get_instance();
}
jagoron_get_theme_instance();
//print_r( filemtime(get_template_directory() ."/style.css"));//checking version
function jagoron_enqueue_scripts()
{

    // Way-1(first register, then enqueue-css):  wp_register_style("style-css", get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
    // if(is_archive()){
    //    wp_enqueue_style("style-css"); //conditionally enqueue
    // }

    //Way-2 (enqueue-css): wp_enqueue_style("style-css", get_template_directory_uri() ."/style.css");

    //Way-3 (enqueue-css): wp_enqueue_style("style-css", get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');//(name, path, ['dependency'],version number,media='all'/'print'/'screen'/'(max-width:640px)'/'(orientation:portrait)')

    //way-1(enqueue-js): wp_enqueue_script("main-js",get_template_directory_uri().'/assets/main.js',[], filemtime(get_template_directory().'/assets/main.js'),true); //(name, path, ['dependency'],version number,infooter==true/false)

    //way-2 (first register, then enqueue-js): wp_register_script("main-js",get_template_directory_uri().'/assets/main.js',[], filemtime(get_template_directory().'/assets/main.js'),true); 
    //wp_enqueue_script('main-js');

    //register styles
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
    wp_register_style("style-css", get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');

    //register scripts
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], false, true);
    wp_register_script("main-js", get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

    //enqueue styles
    wp_enqueue_style("bootstrap-css");
    wp_enqueue_style("style-css");

    //enqueue scripts
    wp_enqueue_script("bootstrap-js");
    wp_enqueue_script('main-js');

}
add_action("wp_enqueue_scripts", "jagoron_enqueue_scripts");

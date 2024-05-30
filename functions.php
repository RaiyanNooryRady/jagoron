<?php
/**
 * Theme Functions
 * @package Jagoron
 * Here Comments are important documents to understand in future. So don't delete them.
 */
if (!defined("JAGORON_DIR_PATH")) {
    define("JAGORON_DIR_PATH", untrailingslashit(get_template_directory()));
}
if(!defined("JAGORON_DIR_URI")){
    define("JAGORON_DIR_URI", untrailingslashit(get_template_directory_uri()));
}
//print_r(JAGORON_DIR_PATH);
require_once (JAGORON_DIR_PATH . '/inc/helpers/autoloader.php');

function jagoron_get_theme_instance()
{
    \JAGORON_THEME\Inc\JAGORON_THEME::get_instance();
}
jagoron_get_theme_instance();

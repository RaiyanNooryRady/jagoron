<?php
/**
 * Bootstraps the Theme
 * @package Jagoron
 */
namespace JAGORON_THEME\Inc;

use JAGORON_THEME\Inc\Traits\Singleton;

class JAGORON_THEME
{
    use Singleton;
    protected function __construct()
    {
        //load class
        $this->setup_hooks();
        // wp_die("Hello");
    }
    protected function setup_hooks()
    {
        //actions and filters
        /**
         * Actions
         */
        add_action("wp_enqueue_scripts", [$this, 'register_styles']);
        add_action("wp_enqueue_scripts", [$this, 'register_scripts']);
    }
    public function register_styles()
    {
        //register styles
        wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
        wp_register_style("style-css", get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
        //enqueue styles
        wp_enqueue_style("bootstrap-css");
        wp_enqueue_style("style-css");
    }
    public function register_scripts()
    {
        //register scripts
        wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], false, true);
        wp_register_script("main-js", get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
        //enqueue scripts
        wp_enqueue_script("bootstrap-js");
        wp_enqueue_script('main-js');
    }
}
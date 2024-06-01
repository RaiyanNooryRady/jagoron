<?php
/**
 * Register menus
 * @package Jagoron
 */

namespace JAGORON_THEME\Inc;

use JAGORON_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;
    protected function __construct()
    {
        //load class
        $this->setup_hooks();
    }
    protected function setup_hooks()
    {
        //actions and filters
        /**
         * Actions
         */
        add_action('init', [$this, 'register_menus']);
    }
    public function register_menus()
    {
        register_nav_menus([
            'jagoron-header-menu' => esc_html__('Header Menu','jagoron'),
            'jagoron-footer-menu' => esc_html__('Footer Menu','jagoron')
        ]);
    }
}
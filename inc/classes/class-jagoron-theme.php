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
        Assets::get_instance();
        $this->setup_hooks();
        // wp_die("Hello");
    }
    protected function setup_hooks()
    {
        //actions and filters
        /**
         * Actions
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }
    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ]);
    }
}
<?php
/**
 * Bootstraps the Theme
 * @package Jagoron
 */
namespace JAGORON_THEME\Inc;
use JAGORON_THEME\Inc\Traits\Singleton;

class JAGORON_THEME{
    use Singleton;
    protected function __construct(){
        //load class
        $this->set_hooks();
        // wp_die("Hello");
    }
    protected function set_hooks(){
        //actions and filters
    }
}
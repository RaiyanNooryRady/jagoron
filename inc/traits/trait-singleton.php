<?php
namespace Jagorn_Theme\Inc\Traits;

trait singleton{
    public function __construct(){

    }
    public function __clone(){

    }
    final public static function getInstance(){ 
        static $instance = [];
        $called_class= get_called_class();
        if(!isset($instance[$called_class])){
            $instance[$called_class] = new $called_class();
            do_action(sprintf('jagoron_theme_singleton_init%s',$called_class));
        }
        return $instance[$called_class];
    }
}
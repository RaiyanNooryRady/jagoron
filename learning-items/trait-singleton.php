<?php
trait singleton{
    public static function get_instance(){
        static $instance =[];
        $called_class = get_called_class();
        echo $called_class."<br/>";
        if(!isset($instance[$called_class])){
            echo 'hello ';
            $instance[$called_class] = new $called_class();
        }
        return $instance[$called_class];
    }
}
class User{
    use Singleton;
    public function __construct(){
        echo 'Rady<br/>';
    }
}
$user1= User::get_instance();
$user2= User::get_instance();
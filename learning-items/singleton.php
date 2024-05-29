<?php

class TraditionalUser{
    public $user;
    public function __construct($user){
        $this->user = $user;
    }
}
$user1=new TraditionalUser("User1");
$user2=new TraditionalUser("User2");
echo "In Traditional User class: user1 == user2 >> ";
echo var_export($user1==$user2)."<br/>";

class SingletonUser{
    private static $instance ;
    private $property;
    private function __construct($property=null){
        $this->property= $property;
        echo $this->property. "<br/>";
    }
    public static function getInstance($property=null){
        if(!isset(self::$instance)){
         self::$instance = new self($property);
        }
        return self::$instance;
    }
}
$user1= SingletonUser::getInstance("user 1");
$user2= SingletonUser::getInstance("user 2");


echo "In singleton User class: user1 == user2 >> ";
echo var_export($user1==$user2)."<br/>";
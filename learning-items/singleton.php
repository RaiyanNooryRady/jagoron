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
    private function __construct(){
        echo "Private constructor function to prevent direct object creation <br/>";
    }
    public static function getInstance(){
        if(!isset(self::$instance)){
         self::$instance = new self();
        }
        return self::$instance;
    }
}
$user1= SingletonUser::getInstance();
$user2= SingletonUser::getInstance();
$user3= SingletonUser::getInstance();

echo "In singleton User class: user1 == user2 >> ";
echo var_export($user1==$user2)."<br/>";
<?php
class User{
    private static $instance ;
    public static function getInstance(){
        if(!isset(self::$instance)){
         echo 'hello';
         self::$instance = new self();
        }
        return self::$instance;
    }
}
$user1= User::getInstance();
$user2= User::getInstance();
$user3= User::getInstance();
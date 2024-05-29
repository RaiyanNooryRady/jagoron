<?php

class TraditionalUser
{
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
}
$user1 = new TraditionalUser("User1");
$user2 = new TraditionalUser("User2");
echo "In Traditional User class: user1 == user2 >> ";
echo var_export($user1 == $user2) . "<br/>";

class SingletonUser
{
    private static $instance;
    private $property;
    private function __construct($property = null)
    {
        $this->property = $property;
    }
    public static function getInstance($property = null)
    {
        if (!isset(self::$instance)) {
            self::$instance = new self($property);
        }
        return self::$instance;
    }
    public function setProperty($property)
    {
        $this->property = $property;
    }
    public function getProperty()
    {
        return $this->property;
    }
}
$user1 = SingletonUser::getInstance("user 1");
echo $user1->getProperty()."<br/>"; //output user 1
$user2 = SingletonUser::getInstance("user 2");
echo $user2->getProperty()."<br/>"; //output user 1

echo "In singleton User class: user1 == user2 >> ";
echo var_export($user1 == $user2) . "<br/>";
$user2->setProperty("User 2"); 
echo $user2->getProperty(); //output user 2
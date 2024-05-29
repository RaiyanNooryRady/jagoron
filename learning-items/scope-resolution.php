<?php 
class MyClass {
    public static $myStaticProperty = "I am a static variable! <br/>";
    public $x='I am a normal non static variable <br/>';
    public static function myStaticMethod() {
        return "Hello from static method <br/>";
    }
}

//normal way
 $MyClass = new MyClass();
 echo $MyClass->myStaticMethod();
 echo $MyClass->x;

 //scope resolution
echo MyClass::$myStaticProperty; // Output: Hello, World!
echo MyClass::myStaticMethod();  // Output: Hello from static method!
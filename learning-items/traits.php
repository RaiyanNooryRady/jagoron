<?php
class B{
    public function helloB(){
        echo "Hello from class B <br/>";
    }
}
trait traitA{
    public function hello_traitA(){
        echo"Hello from traitA<br/>";
    }
}
trait traitB{
    public function hello_traitB(){
        echo"Hello from traitB<br/>";
    }
}
class A extends B{
    use traitA, traitB;
    public function __construct(){
        echo "constructing <br/>";
    }
    public function helloA(){
        echo "hello from A <br/>";
    }
}

$A=new A();
$A->helloA();
$A->helloB();
$A->hello_traitA();
$A->hello_traitB();
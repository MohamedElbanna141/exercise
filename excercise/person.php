<?php

abstract class Person{
   abstract public function greet();
}

class English extends Person{
    public function greet(){
     echo "HELLO" . "<br>";   
    }
}

class German extends Person{
    public function greet(){
        echo "HALO" . "<br>";
    }
}

class French extends Person{
    public function greet(){
        echo "Buonjour" . "<br>";
    }
}

$e1=new English();
$e1->greet();

$g1=new German();
$g1->greet();

$f1=new French();
$f1->greet();
?>
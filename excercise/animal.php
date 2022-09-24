<?php
class Animal{
    private $family;
    private $food;

    public function __construct(string $family , string $food){
         $this->family = $family;
         $this->food = $food;
    }

    public function getFamily(){
        echo $this->family . "<br>";
    }

    public function setFamily(string $family){
          $this->family = $family;
    }
                
    public function getFood(){
        echo $this->food . "<br>";
    }

    public function setFood(string $Food){
          $this->Food = $Food;
    }
}


class Cow extends Animal{
    private $owner;
    
    public function getOwner(){
        echo $this->Owner . "<br>";
    }

    public function setOwner(string $Owner){
          $this->Owner = $Owner;
    }
}

class Lion extends Animal{

}


$cow=new Cow("cows","grass");
$cow->setOwner("ahmed");
$cow->getFamily();
$cow->getFood();
$cow->getOwner();


$cow=new Cow("lions","meat");
$cow->getFamily();
$cow->getFood();
?>
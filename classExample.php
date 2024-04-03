<?php
class Animal{
    public $name;
    public $legs;
    public $horns;

    public function __construct($name,$legs,$horns){
        $this->legs = $legs;
        $this->horns = $horns;
        $this->name = $name;
    }

    public function printName($name){
        echo "I am " .$name. "<br/>";
    }
    public function makeNoise(){
        echo "I can make noise<br/>";
    }

    function canWalk($legs){
        echo "I can walk on " . $legs . "legs<br/>";
    }
}

class Dog extends Animal{
    public $hasTail;

    public function __construct($hasTail){
        $this->hasTail = $hasTail;
    }

    //Overridden method
    public function makeNoise(){
        echo "A dog can bark<br/>";
    }
    public function introDog(){
        echo "Inherited from Animal:I am dog <br/>";
    }


}

$dog = new Dog(true);
$dog->makeNoise();
$dog->canWalk(4);
$dog->printName("dog");

$dog->introDog();


echo "<br/>Interface example<br/>";

/*Smillir way absract class can be defined difference
will be absract class can have properties whereas interfaces don't
*/
interface Fruit{
    public function myTaste();
    public static function myName($name);
}

class Mango implements Fruit{
    public static function myName($name){
        echo "<br/>I am static method.<br/>My name is " .$name . "<br/>";
    }
    public function myTaste(){
        echo "My taste is sweet <br/>";
    }
}
$mango = new Mango();
$mango->myTaste();

Mango::myName("mango");
?>
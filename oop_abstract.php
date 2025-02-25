<?php 
abstract class Animal{
    abstract public function makeSound();

    public function sleep(){
        echo "Sleeping...<br>";
    }
}
class Dog extends Animal{
    public function makeSound(){
        echo "Woof!<br>";
    }
}
$dog = new Dog();
$dog->makeSound();
$dog->sleep();
?>
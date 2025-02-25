<?php
interface UserInterface{
    public function getName();
    public function getAge();
}
class User implements UserInterface{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
}
$user = new User("BOXI",25);
echo "Name: ".$user->getName() ."<br>";
echo "Age: ".$user->getAge() ."<br>";
?>
<?php
class Animal{
    protected $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function eat(){
        echo "{$this->name} is eating .\n";
    }
}
class Mammal extends Animal{
    public function run(){
        echo "{$this->name} is running .\n";
    }
}
class Dog extends Mammal{
    public function bark(){
        echo "{$this->name} is barking .\n";
    }
}
$obj=new Dog("Buddy");
$obj->eat();
$obj->run();
$obj->bark();
?>
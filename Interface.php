<?php
interface Animal{
    public function makesound();
}
class Cat implements Animal{
    public function makesound(){
        echo "meoww meoww..........";
    }
}
class Dog implements Animal{
    public function makesound(){
        echo "bow bow..............";
    }
}
$c=new Cat();
$c->makesound();
$d=new Dog();
$d->makesound();
?>
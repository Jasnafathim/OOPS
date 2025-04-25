<?php
class myclass
{
    public $a=5;
    private $b=10;
    protected $c=100;
}
class demo extends myclass
{
    function f1()
    {
        echo $this->a."<br/>";
        echo $this->b."<br/>";
        echo $this->c."<br/>";

    }
}
$obj=new demo();
$obj->f1();



?>
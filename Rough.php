<?php
/*
class myclass
{
    public function myfunction()
    {
        echo "hello";
    }
}
$obj=new myclass();
$obj->myfunction();
*/

class A{
    public function A1(){
        echo "A1 function in A<br/>";
    }

}
interface B{
    public function B1();

}
class C extends A implements B{
    public function B1(){
        echo "B1 function in C<br/>";
    }
}
$obj=new C();
$obj->A1();
$obj->B1();
?>
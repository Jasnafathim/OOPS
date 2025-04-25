<?php
class baseclass{
    function f1(){
        echo "hello<br/>";
    }
}
class derivedclass extends baseclass{
    function f2(){
        echo "welcome<br/>";
    }
}
$obj=new derivedclass();
$obj->f1();
$obj->f2();

?>
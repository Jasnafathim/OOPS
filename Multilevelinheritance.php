<?php
class grandclass{
    function memberfunction1(){
        echo "jasna<br/>";
    }
}
class baseclass extends grandclass{
    function memberfunction2(){
        echo "surumi<br/>";
    }
}
class childclass extends baseclass{
    function memberfunction3(){
        echo "fathim<br/>";
    }
}
$obj=new childclass();
$obj->memberfunction1();
$obj->memberfunction2();
$obj->memberfunction3();

?>
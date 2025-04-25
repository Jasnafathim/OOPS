<?php
class Father{
    public function do_magic(){
        echo "magic of father____________<br/>";
    }
}
class Child extends Father{
    public function do_magic(){
        echo "magic of son...............<br/>";
    }
}
$obj=new Child();
$obj->do_magic();

?>
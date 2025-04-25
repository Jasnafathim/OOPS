<?php
class myclass
{
    var $a;
    public function my($name)
    {
        echo $this->a= $name;
    }
}
$obj=new myclass();
$obj->my('jasna');


?>
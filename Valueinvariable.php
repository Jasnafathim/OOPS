<?php
class myclass
{
    private $a="jasna";
    public function my()
    {
        echo $this->a;
    }
}
$obj=new myclass();
$obj->my();

?>
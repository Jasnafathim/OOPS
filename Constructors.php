<?php
/*
class myclass{
    public function __construct(){
        echo "welcome";
    }
}
$obj=new myclass();
*/
class myclass{
    var $name;
    public function __construct($n){
        echo $this->name=$n;
    }
}
$obj=new myclass('appu');
?>
<?php
abstract class vehicle{
    protected $name;
    protected $color;

    public function break(){
        echo "apply break........";
    }
    public function accelerate(){
        echo "accelerateeeeeeeee............";
    }
    abstract public function service();
}
class car extends vehicle{

    public function service(){
        echo "service after 160 days";
    }

}
class bike extends vehicle{

    public function service(){
        echo "60 days of service......";
    }
}
$obj=new bike();
$obj->service();
?>
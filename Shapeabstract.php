<?php
abstract class Shape{    
    abstract public function calculateArea();
}

class Circle extends Shape{
    private $radius;    
    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calculateArea(){
        return 3.14 * pow($this->radius, 2);
    }
}

class Rectangle extends Shape{
    private $width;
    private $height;
    
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->width * $this->height;
    }
}

$circle = new Circle(6);
$rectangle = new Rectangle(10,5);

echo "Area of the circle: " . $circle->calculateArea() . "<br/>";
echo "Area of the rectangle: " . $rectangle->calculateArea() . "<br/>";
?>

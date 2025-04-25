<?php
require 'Head.php';

function sum($a,$b=50){
    return $a+$b;
}
$s=sum(90);
echo $s;

include 'Footer.php';
?>
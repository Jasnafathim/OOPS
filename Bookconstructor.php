<?php
class Book{
    public $title;
    public $author;
    public $year;

public function __construct($title,$author,$year){
    $this->title=$title;
    $this->author=$author;
    $this->year=$year;

}
public function getBookInfo(){
    echo "Title: " . $this->title ;
    echo ", Author: " . $this->author ;
    echo ", Year: " . $this->year;
}
}

$newbook=new Book('Ikigai','Hector Garcia','2023');
$newbook->getBookInfo();
?>



    


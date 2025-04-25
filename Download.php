<?php
$f=$_FILES["fp"]["name"];
header("content-disposition:attachment; filename=".basename($f));
readfile($f);
?>
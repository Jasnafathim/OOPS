<?php
$target_dir="Upload/";
$target_file=$target_dir.basename($_FILES["fp"]["name"]);
if(file_exists($target_file))
{
    echo "sorry file already exists";
}
if($_FILES["fp"]["size"]>50000)
{
    echo "sorry file is too large";
}
else{
    if(move_uploaded_file($_FILES["fp"]["tmp_name"],$target_file))
    {
        echo "sucess".basename($_FILES["fp"]["name"])." has een uploaded";
    }
    else{
        echo "sorry error while uploading";
    }
}
?>
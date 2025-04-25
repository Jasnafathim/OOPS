<?php
function checksum($num){
    if($num<=1)
    {
        throw new Exception("value is less than 1 <br/>");
    }
    return true;
}
try{
    checksum(5);
    echo "passed value is less than 1 <br/>";
}
catch(Exception $e){
    echo "exception msg <br/>".$e->getmessage();
}
finally{
    echo "finally block<br/>";
}

?>
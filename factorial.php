<?php
function fact($n)
{
    if($n==0)
    {
        return 1;
    }
    else
    {
        return $n*fact($n-1);
    }
}
echo "factorial is ".fact(5);
?>
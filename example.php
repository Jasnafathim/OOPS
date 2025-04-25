<?php
/*
for($i=1;$i<=5;$i++)

{ echo $i;
    echo "<br/>";
    
    for($j=1;$j<=$i;$j++)
    {
        echo $j ;
        
    }
    for($k=1;$k<=$i;$k++)
    {
        echo $k;
    }
    
}

*/
/*
        1 
      1 2 1 
    1 2 3 2 1 
  1 2 3 4 3 2 1 
1 2 3 4 5 4 3 2 1
*/


$n = 5; // Number of rows

for ($i = 1; $i <= $n; $i++) {
    // Print leading spaces
    for ($j = $i; $j < $n; $j++) {
        echo "  ";
    }
    
    // Print ascending numbers
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    
    // Print descending numbers
    for ($j = $i - 1; $j >= 1; $j--) {
        echo $j . " ";
    }
    
    // Move to the next line
    echo "<br/>";
}


?>


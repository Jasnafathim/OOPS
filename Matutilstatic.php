<?php
class MathUtils
{
    public static function calculateSum(array $numbers): void {
        $sum = 0;
        foreach ($numbers as $num)
        {
            $sum= $sum+$num;
        }
        echo "The sum of numbers is: " . $sum;
    }
}

$numbers = [11, 22, 33, 44, 55];
MathUtils::calculateSum($numbers);
?>

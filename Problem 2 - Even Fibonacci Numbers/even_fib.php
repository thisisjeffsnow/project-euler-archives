<?php


class Fibonacci
{
    public static function evenFib(int $n): int
    {
        /* Using formula for nth Fibonacci number */
        $bigPhi = (1 + sqrt(5))/2;
        $smallPhi = (1 - sqrt(5))/2;

        return (int) ((pow($bigPhi, 3*$n) - pow($smallPhi, 3*$n))/sqrt(5));
    }
}

$sum = 0;
$index = 0;

/* Problem says only add even terms that are less than 4 million. */
$limit = 3999999;

while(true)
{
    /* Pump out even Fibonacci numbers and add to our total
    until we exceed 4 million */
    $currentEvenFib = Fibonacci::evenFib($index);
    if($currentEvenFib < $limit) {
        $sum += $currentEvenFib;
        $index++;
    } else {
        break;
    }
}

echo "S = $sum";




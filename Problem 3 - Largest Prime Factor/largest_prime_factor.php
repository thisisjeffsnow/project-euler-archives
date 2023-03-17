<?php

$bigN = 600851475143;
$bigS = 1;

$n = 3;
$c = 1;

while($bigN != 1)
{
    while($bigN/$n != floor($bigN/$n))
    {
        $n += 2;
    }
    $bigS = max($bigS, $n);
    $bigN /= $n;
    $n = 3;
}

echo "S = $bigS";
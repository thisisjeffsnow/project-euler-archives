<?php

$m = 990;
$n = 999;

$s = $m * $n;

while(strrev(strval($s)) != strval($s))
{
    if(999*($m - 11) > $m*($n - 1)) {
        $m -= 11;
        $n = 999;
    } else {
        $n--;
    }
    $s = $m*$n;
}

echo "S = $s";

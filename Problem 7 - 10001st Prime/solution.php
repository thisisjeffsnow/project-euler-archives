<?php

$desiredPrime = 10001;

$primes = [2, 3];

$count = 2;

$k = 1;

while($count < $desiredPrime) {
    // Check 6k - 1
    $check = 6*$k - 1;
    $index = 0;
    while(true) {
        $prime = $primes[$index];
        // it's divisible by a smaller prime :(
        if($check/$prime == floor($check/$prime)) {
            break;
        }
        // if we make it here, it's not divisble by any smaller primes,
        // so it's prime too :)
        if($prime*$prime > $check) {
            $primes[] = $check;
            $count++;
            break;
        }
        $index++;
    }

    // Check 6k + 1
    $check = 6*$k + 1;
    $index = 0;
    while(true) {
        $prime = $primes[$index];
        // it's divisible by a smaller prime :(
        if($check/$prime == floor($check/$prime)) {
            break;
        }
        // if we make it here, it's not divisble by any smaller primes,
        // so it's prime too :)
        if($prime*$prime > $check) {
            $primes[] = $check;
            $count++;
            break;
        }
        $index++;
    }
    $k++;
}

echo "S = " . $primes[$desiredPrime - 1];
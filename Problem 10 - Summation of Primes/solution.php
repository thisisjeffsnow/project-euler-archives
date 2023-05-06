<?php

# Set max size of array and set all values as prime.
$maxp = 2000000;
$list = array_fill(0, $maxp, true);

# Mark 0 and 1 as not prime.
$list[0] = false;
$list[1] = false;

# Sieve the array starting at 2.
$index = 2;

/* We only need to check to the square root of the max as any composite C
   with sqrt(N) < C < N will be divisible by some natural below sqrt(N). */
while ($index <= sqrt($maxp)) {
    # Mark every value at a multiple of the current index as not prime.
    for ($i = 2 * $index; $i < $maxp; $i += $index) {
        $list[$i] = false;
    }

    # Find the next index value that is prime.
    do {
        $index++;
    } while (!$list[$index]);
}

# Add up all the primes we have.
$S = 0;
for ($i = 0; $i < $maxp; $i++) {
    if ($list[$i]) {
        $S += $i;
    }
}

echo $S;

# Problem

2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is _evenly divisible_ by all of the numbers from 1 to 20?

# Solution

This can be done with pen and paper. We are asked for the LCM of the first 20 natural numbers. To do so, find the product of all of the largest prime powers less than 20.

$$S = 2^{\lfloor{\log_2{20}}\rfloor} \cdot 3^{\lfloor{\log_3{20}}\rfloor} \cdot 5^{\lfloor{\log_5{20}}\rfloor} \cdot 7^{\lfloor{\log_7{20}}\rfloor} \cdot 11^{\lfloor{\log_{11}{20}}\rfloor} \cdot 13^{\lfloor{\log_{13}{20}}\rfloor} \cdot 17^{\lfloor{\log_{17}{20}}\rfloor} \cdot 19^{\lfloor{\log_{19}{20}}\rfloor} $$

$$S = 2^4 \cdot 3^2 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19$$

$$S = 232792560$$

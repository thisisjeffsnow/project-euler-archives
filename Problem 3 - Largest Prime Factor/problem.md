# Problem 3 - Largest Prime Factor

The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

# Solution

Let $N = 600851475143$.

Set $S = 1$.

Iterate through odd natural numbers $n \geq 3$ until one of them divides into $N$. By parity, no even number can divide into $N$ so we can skip those. Also, no evens other than 2 are prime anyway.

$n$ will be prime (if not, we would have run into a smaller $n$ before then).

Update $S = \max(S, n)$, and update $N = \frac{N}{n}$.

Rerun iteration until $N = 1$.

Return $S$.

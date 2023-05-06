# Problem 10 - Summation of Primes

The sum of the primes below $10$ is $2 + 3 + 5 + 7 = 17$.

Find the sum of all the primes below two million.

# Solution

Create an array of two million entries with all entries set to true (prime).

$0$ and $1$ are not prime so mark them as false.

Use a sieve, and moving forward through the array, for every true value, mark all multiples of that index as false.

Continue doing this until the index surpasses $\sqrt{2000000}$, as any composite integer $C$ such that $\sqrt{2000000} < C < 2000000$ must be divisible by some natural number $n$ such that $n < \sqrt{2000000}$

Tally all the indicies where the value is true.

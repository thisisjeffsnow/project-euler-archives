# Problem 7 - 10001st Prime

By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?

# Solution

Create an array to keep track of primes. Because all primes except 2 and 3 are of the form $6k \pm 1$, add $2$ and $3$ to our starting array. Keep a tally of the number of primes we've seen. Check natural numbers of the form $6k \pm 1$ to see if any of the primes in our array less than $\sqrt{6k \pm 1}$ divide into it. If not, add this to our array, and increment our counter. Stop when we hit 10001 primes.

This runs pretty quickly, but I wonder if a sieve is quicker.

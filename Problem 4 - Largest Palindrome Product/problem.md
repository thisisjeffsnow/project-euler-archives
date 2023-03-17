# Problem

A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

Find the largest palindrome made from the product of two 3-digit numbers.

# Solution

By quick inspection, $10101 = 101 \cdot 101$ and $111111 = 777 \cdot 143$ while $999^2 < 1000000 = 1000^2$ and $999999 = 999\cdot1001$, so the solution must be a 6-digit integer.

Let $S = ABCCBA = 100000A + 10000B + 1000C + 100C + 10B + A$

$S = 11\cdot\left(9091A + 910B + 100C\right)$

Therefore, one of the three digit numbers $\left(M, N\right)$ must be divisible by $11$. Suppose that it's $M$.

Set $M = 990 = 11\cdot90$ and $N = 999$.

Set $S = MN$.

Iterate as follows:

Check if $S$ is a palindrome and return it if so.

If not, set $S = \max\left(999\cdot(M-11),\;M\cdot(N-1)\right)$ and update $M$ and $N$ accordingly.

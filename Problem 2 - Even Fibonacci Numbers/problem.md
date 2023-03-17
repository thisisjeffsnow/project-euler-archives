# Problem

Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:

1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.

# Solution

$$F_0 = 0, F_1 = 1, F_2 = 1, F_3 = 2...$$

Use the formula for the nth Fibonacci number:

$$\Phi = \frac{1 + \sqrt{5}}{2}$$

$$\phi = \frac{1 - \sqrt{5}}{2}$$

$$F_n = \frac{\Phi^{n} - \phi^{n}}{\sqrt{5}}$$

From parity, $$F_n$$ is even for $$n = 3k$$

Therefore,

$$S = \sum_{n = 1}^N(F_{3n})$$

For some value of N such that the addend doesn't meet or exceeed four million.

Create a running total. Iterate over an index, grabbing the next even Fibonacci number. Check if it's less than 4 million. If so, add it to the total. If not, break the interation and return the total.
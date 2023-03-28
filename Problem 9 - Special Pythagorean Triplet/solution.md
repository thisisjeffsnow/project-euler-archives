# Problem 9 - Special Pythagorean Triplet

A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

$a^2 + b^2 = c^2$

For example, $3^2 + 4^2 = 9 + 16 = 25 = 5^2$.

There exists exactly one Pythagorean triplet for which $a + b + c = 1000$.
Find the product $abc$.

# Solution

I did this one with pen and paper.

First consider the following:

If $a$, $b$, and $c$ all share a common factor, say $k$, then

if $a^2 + b^2 = c^2$, then $\left(\frac{a}{k}\right)^2 + \left(\frac{b}{k}\right)^2 = \left(\frac{c}{k}\right)^2$, and $\frac{a}{k} + \frac{b}{k} = \frac{c}{k}$.

It is not a bad idea to investigate smaller triplets which sum to a divisor of $1000$. In fact, since we are given that there is only triplet with the required property, there must be only one value of $k$ that satisifies this.

If you list some common triplets with their sums like this:

$(3, 4, 5) = 12$

$(5, 12, 13) = 30$

$(8, 15, 17) = 40$

You see that $(8, 15, 17)$ sums to $40$ which is a factor of $1000$.

Therefore, since $\frac{1000}{40} = 25$, $\frac{a}{25} = 8, \frac{b}{25} = 15, \frac{c}{25} = 17$

$abc = 8\cdot25\cdot15\cdot25\cdot17\cdot25 = 31875000$

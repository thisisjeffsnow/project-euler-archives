## Problem

```
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.
```

## Solution

I did this one with pen and paper. Sum together all the multiples of 3 from 3 to 999 along with the sum of all multiples of 5 from 5 to 995, and since we've double-counted all the multiples of 15, subtract all multiples of 15 in the range 15 to 990 from the total.

$$\left\lfloor\frac{999}{3}\right\rfloor\ = 333$$
$$\left\lfloor\frac{999}{5}\right\rfloor\ = 199$$
$$\left\lfloor\frac{999}{15}\right\rfloor\ = 66$$

$$S = \left( \sum_{k=1}^{333} 3k \right) + \left( \sum_{k=1}^{199} 5k \right) - \left( \sum_{k=1}^{66} 15k \right)$$

$$S = \frac{3*333*334}{2} + \frac{5*199*200}{2} - \frac{15*66*67}{2}$$

$$S = 166833 + 99500 - 33165$$

$$S = 233168$$

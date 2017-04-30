[![Build Status](https://travis-ci.org/mazedlx/median.svg?branch=master)](https://travis-ci.org/mazedlx/median)

# median
Super simple PHP library for getting the median of array values (cn also calc the average of the array's elements).

## Installation and Usage

`composer install mazedlx/median`

```php
$arrayOfValues = [1, 2, 5, 1000, 7]
$m = new Median($arrayOfValues);

$avg= $m->average();
// $avg == 203

$median = $m->median();
// $median == 5
```



![](https://travis-ci.org/mazedlx/median.svg?branch=master)

# median
Super simple PHP library for getting the median of array values (also returns the avg of the array

```php
$arrayOfValues = [1, 2, 5, 1000, 7]
$m = new Median($arrayOfValues);

$avh = $m->average();
// $avh == 203

$median = $m->median();
// $median == 5
```



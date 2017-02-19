<?php
namespace Median;

class Median
{
    protected $array;

    public function __construct($array)
    {
        $this->array = $array;

        if (! is_array($this->array)) {
            throw new \Exception('Not an array');
        }

        if (! count($this->array)) {
            throw new \Exception('Empty array');
        }

        sort($this->array);
    }

    /**
     * Returns the average value of all array values
     *
     * @param  array $array
     * @return mixed
     */
    public function average()
    {
        return array_sum($this->array)/count($this->array);
    }

    /**
     * Returns the median of all array values
     *
     * @param  array $array
     * @return mixed
     */
    public function median()
    {
        if (count($this->array) %2 == 0) {
            return ($this->array[(count($this->array)/2 - 1)]);
        } else {
            return $this->array[floor(count($this->array)/2)];
        }
    }
}

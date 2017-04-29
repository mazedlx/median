<?php
namespace Median;

class Median
{
    protected $array;

    /**
     * Median constructor.
     * @param $array
     * @throws \Exception
     */
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
     * @return mixed
     */
    public function average()
    {
        return array_sum($this->array)/count($this->array);
    }

    /**
     * Returns the median of all array values
     *
     * @return mixed
     */
    public function median()
    {
        if (count($this->array) % 2 != 0) {
            return ($this->array[(count($this->array)/2)]);
        } else {
            // get the upper/lower of the 2 middle values in the array
            $lower_middle_of_array      = floor(count($this->array) / 2);
            $upper_middle_of_array      = $lower_middle_of_array + 1;
            $average_of_upper_and_lower = ($lower_middle_of_array + $upper_middle_of_array)/2;

            return $average_of_upper_and_lower;
        }
    }
}

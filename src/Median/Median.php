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
     * @return float|int
     */
    public function median()
    {
        $array_midpoint = (int) floor((count($this->array) / 2));
        if (count($this->array) % 2 != 0) {
            return ($this->array[$array_midpoint]);
        } else {
            $array_midpoint_lower = $array_midpoint - 1;
            $average_of_midpoints = ($this->array[$array_midpoint_lower] + $this->array[$array_midpoint]) / 2;

            return $average_of_midpoints;
        }
    }
}

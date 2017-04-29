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
        $array = $this->array;
        print_r($array);
        $midpoint_in_array = (int) floor((count($array) / 2));
        if (count($array) % 2 != 0) {
            return ($array[$midpoint_in_array]);
        } else {
            $lower_midpoint_in_array = $midpoint_in_array - 1;
            $average_of_upper_and_lower_midpoints = ($array[$lower_midpoint_in_array] + $array[$midpoint_in_array]) / 2;

            return $average_of_upper_and_lower_midpoints;
        }
    }
}

$test_array  = [1, 2, 3, 10, 5, 6, 1, 4];
$median = new Median($test_array);
echo "Median: " . $median->median() . "\n";


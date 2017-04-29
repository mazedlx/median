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
    public function __construct()
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
     * @param $array
     * @return float|int
     */
    public static function median($array)
    {
        if (count($array) % 2 != 0) {
            $midpoint_in_array = (int) floor((count($array) / 2));
            return ($array[$midpoint_in_array]);
        } else {
            $lower_midpoint_of_array = (int) floor(count($array) / 2);
            $upper_midpoint_of_array = $lower_midpoint_of_array + 1;

            $average_of_upper_and_lower_midpoints = ($array[$lower_midpoint_of_array] + $array[$upper_midpoint_of_array]) / 2;

            return $average_of_upper_and_lower_midpoints;
        }
    }
}

$test_array_1  = [1, 2, 3, 10, 5, 6, 1, 3, 4];
$test_array_2  = [1, 2, 3, 10, 5, 6, 1, 3];

echo "Median: " . Median::median($test_array_1) . "\n";
echo "Median: " . Median::median($test_array_2) . "\n";
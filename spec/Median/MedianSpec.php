<?php

namespace spec\Median;

use Median\Median;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MedianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith([1,2,3]);
        $this->shouldHaveType(Median::class);
    }

    function it_throws_an_exception_if_an_empty_array_is_passed($array = [])
    {
        $this->beConstructedWith($array);
        $this->shouldThrow('\Exception')->duringInstantiation();
        $this->beConstructedWith($array);
        $this->shouldThrow('\Exception')->duringInstantiation();
    }

    function it_throws_an_exception_if_anything_other_than_an_array_is_passed($string = 'not an array')
    {
        $this->beConstructedWith($string);
        $this->shouldThrow('\Exception')->duringInstantiation();
        $this->beConstructedWith($string);
        $this->shouldThrow('\Exception')->duringInstantiation();
    }

    function it_should_return_an_average_of_five_for_5_8_7_4_1()
    {
        $array = [5,8,7,4,1];
        $this->beConstructedWith($array);
        $this->average($array)->shouldEqual(5);
    }

    function it_should_return_a_median_of_five_for_5_8_7_4_1()
    {
        $array = [5,8,7,4,1];
        $this->beConstructedWith($array);
        $this->median($array)->shouldEqual(5);
    }

    function it_should_return_an_average_of_44_and_one_third_for_1_4_7_9_11_100_250_3_14()
    {
        $array = [1,4,7,9,11,100,250,3, 14];
        $this->beConstructedWith($array);
        $this->average($array)->shouldEqual(44.333333333333333);
    }

    function it_should_return_a_median_of_9_for_1_4_7_9_11_100_250_3_14()
    {
        $array = [1,4,7,9,11,100,250,3, 14];
        $this->beConstructedWith($array);
        $this->median($array)->shouldEqual(9);
    }

    function it_should_return_a_median_of_3point5_for_1_2_3_4_5_6()
    {
        $array = [1,2,3,4,5,6];
        $this->beConstructedWith($array);
        $this->median($array)->shouldEqual(3.5);
    }

    function it_should_return_a_median_of_4point5_for_1_2_3_4_5_6_7_8()
    {
        $array = [1,2,3,4,5,6,7,8];
        $this->beConstructedWith($array);
        $this->median($array)->shouldEqual(4.5);
    }

    function it_should_return_a_median_of_56_for_66_13_46_378_336_26_4_77_5_92()
    {
        $array = [66,13,46,378,336,26,4,77,5,92];
        $this->beConstructedWith($array);
        $this->median($array)->shouldEqual(56);
    }
}

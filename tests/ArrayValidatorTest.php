<?php

/**
 * User : Juba
 */

namespace Tests\ONREPRESENTE\validator;

use ONREPRESENTE\validator\ArrayValidator;

/**
 * Class ArrayValidatorTest
 *
 * @package ONREPRESENTE\validator
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the array is empty
     *
     * @throws \Exception
     */
    public function testIsEmptyTrue()
    {
        $array = [];

        $result = ArrayValidator::isEmpty($array);

        $this->assertTrue($result);
    }

    /**
     * Test if the array is not empty
     *
     * @throws \Exception
     */
    public function testIsEmptyFalse()
    {
        $array = ['car' => 'bus'];

        $result = ArrayValidator::isEmpty($array);

        $this->assertFalse($result);
    }

    /**
     * Test the function with comparator equal
     *
     * @throws \Exception
     */
    public function testToCompareEqual()
    {
        $array = array('apple' => 2);

        $bool = ArrayValidator::toCompare($array, ArrayValidator::EQUAL, 2);

        $this->assertFalse($bool);
    }

    /**
     * Test the function with <=> comparator
     *
     * @throws \Exception
     */
    public function testArrayBetweenTrue()
    {
        $array = ['brand' => 'nike', 'color' => 'white', 'brand_style' => 'comma'];

        $result = ArrayValidator::arrayBetween($array, 3, 9);

        $this->assertTrue($result);
    }

    /**
     * Test the function with <=/> comparator
     *
     * @throws \Exception
     */
    public function testArrayBetweenFalse()
    {
        $array = ['brand' => 'nike', 'color' => 'white', 'brand_style' => 'comma'];

        $result = ArrayValidator::arrayBetween($array, 0, 1);

        $this->assertFalse($result);
    }

    /**
     * Test if the key exist
     *
     * @throws \Exception
     */
    public function testKeyExistsTrue()
    {
        $array = ['apple' => 'red'];

        $result = ArrayValidator::keyExists($array, 'apple');

        $this->assertTrue($result);
    }

    /**
     * Test if the key no exist
     *
     * @throws \Exception
     */
    public function testKeyExistsFalse()
    {
        $array = ['apple' => 'red'];

        $result = ArrayValidator::keyExists($array, 'fiat');

        $this->assertFalse($result);
    }

    /**
     * Test if value exist
     *
     * @throws \Exception
     */
    public function testValueExistsTrue()
    {
        $array = ['fruits' => 'apple'];

        $result = ArrayValidator::valueExist($array, 'apple');

        $this->assertTrue($result);
    }

    /**
     *  Test if value no exist
     *
     * @throws \Exception
     */
    public function testValueExistFalse()
    {
        $array = ['fruits' => 'apple'];

        $result = ArrayValidator::valueExist($array, 'banana');

        $this->assertFalse($result);
    }

}
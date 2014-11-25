<?php

/**
 * User : Juba
 */

namespace ONREPRESENTE\validator;

use ONREPRESENTE\validator\IntegerValidator;

/**
 * Class IntegerValidatorTest
 *
 * @package ONREPRESENTE\validator
 */
class IntegerValidatorTest extends  \PHPUnit_Framework_TestCase
{
    /**
     * Test if the numbers are equal
     *
     * @param $integer
     */
    public function testEqualTrue($integer)
   {
       /*We go to generate a random number enter 10 at 80.*/
       $integer = rand(10, 80);

       $result = IntegerValidator::equal($integer, $integer);

       $this->assertTrue($result);
   }

    /**
     * Test if the numbers are not equal
     */
    public function testEqualFalse()
    {
        /*We go to generate a random number enter 10 at 80 for $integer*/
        $integer = rand(10,80);
        /*We go to generate a random number enter 85 at 150 for $integerTwo*/
        $integerTwo = rand(85,150);

        /* We go to call the function equal(with params) on the class IntegerValidator*/
        $result = IntegerValidator::equal($integer, $integerTwo);

        $this->assertFalse($result);
    }

    /**
     * Test if the numbers is > at the second number
     *
     * @param $integer
     */
    public function testSuperiorTrue($integer)
   {
       $integer = rand(85,150);
       $integerTwo = rand(10,180);

       $result = IntegerValidator::Superior($integer, $integer);

       $this->assertTrue($result);
   }

    /**
     * Test if the numbers is not > at the second number
     */
    public function testSuperiorFalse()
    {
        $integer = rand(10,80);
        $integerTwo = rand(85,150);

        $result = IntegerValidator::Superior($integer, $integerTwo);

        $this->assertFalse($result);
    }
}
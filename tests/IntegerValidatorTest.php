<?php

/**
 * User : Juba
 */

namespace Tests\ONREPRESENTE\validator;

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
    public function testEqualTrue()
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
   public function testSuperiorTrue()
   {
       $integer = rand(85,150);
       $integerTwo = rand(10,180);

       $result = IntegerValidator::Superior($integer, $integerTwo);

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

    /**
     * Test if the numbers is < at the second number
     *
     * @param $integer
     */
   public function testInferiorTrue()
   {
       $integer = rand(10,80);
       $integerTwo = rand(85,150);

       $result = IntegerValidator::Inferior($integer, $integerTwo);

       $this->assertTrue($result);
   }

    /**
     * Test if the numbers is not < at the second number
     */
    public function testInferiorFalse()
    {
        $integer = rand(85,150);
        $integerTwo = rand(10,80);

        $result = IntegerValidator::Inferior($integer, $integerTwo);

        $this->assertFalse($result);
    }

    /**
     * Test if the number is between at others
     *
     */
    public function testBetweenTrue()
    {
        $low = rand(12,14);
        $integer = rand(15,20);
        $high = rand(80,120);

        $result = IntegerValidator::between($integer, $low, $high);

        $this->assertTrue($result);
    }
    /**
     * Check if the number is not between at others
     */
    public function testBetweenFalse()
    {
        $low = rand(10,20);
        $integer = rand(80,120);
        $high = rand(25,60);

        $result = IntegerValidator::between($low, $integer, $high);

        $this->assertFalse($result);
    }

    /**
     * Test if the number is positive
     */
    public function testPositiveTrue()
    {
        $integer = rand(40,220);

        $result = IntegerValidator::positive($integer);

        $this->assertTrue($result);
    }
    /**
     * Test if the number is not positive
     */
    public function testPositiveFalse()
    {
        $integer = rand(-40, -220);

        $result = IntegerValidator::positive($integer);

        $this->assertFalse($result);
    }

    /**
     * Test if number number is negative
     */
    public function testNegativeTrue()
    {
        $a = rand(-25, -90);

        $result = IntegerValidator::negative($a);

        $this->assertTrue($result);
    }
    /**
     * Test if number number is not negative
     */
    public function testNegativeFalse()
    {
        $a = rand(80, 170);

        $result = IntegerValidator::negative($a);

        $this->assertFalse($result);
    }
}
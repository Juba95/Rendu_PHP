<?php

/**
 * User : Juba
 */

namespace Tests\ONREPRESENTE\validator;

use ONREPRESENTE\validator\StringValidator;

/**
 * Class StringValidatorTest
 *
 * @package ONREPRESENTE\validator
 */
class StringValidatorTest extends  \PHPUnit_Framework_TestCase
{
    /**
     *  Test if the string has this = at length
     *
     * @throws \Exception
     */
    public function testLengthEqualTrue()
    {
        $string = "defends";
        $length = mb_strlen($string);

        $result = StringValidator::lengthEqual($string, $length);

        $this->assertTrue($result);
    }

    /**
     *  Test if the string has this != at length
     *
     * @throws \Exception
     */
    public function testLengthEqualFalse()
    {
        $string = "defends";
        $length = mb_strlen($string) + 8;

        $result = StringValidator::lengthEqual($string, $length);

        $this->assertTrue($result);
    }

    /**
     * Test if the string is superior at the length
     *
     * @throws \Exception
     */
    public function testLengthSuperiorTrue()
    {
        $string = "defends";
        $length = (mb_strlen($string)-10);

        $result = StringValidator::lengthSuperior($string, $length);

        $this->assertTrue($result);
    }

    /**
     * Test if the string is not superior at the length
     *
     * @throws \Exception
     */
    public function testLengthSuperiorFalse()
    {
        $string = "defends";
        $length = (mb_strlen($string)+15);

        $result = StringValidator::lengthSuperior($string, $length);

        $this->assertTrue($result);
    }

    /**
     * Test if the string is inferior at the length
     *
     * @throws \Exception
     */
    public function testLengthInferiorTrue()
    {
        $string = "defends";
        $length = (mb_strlen($string)+10);

        $result = StringValidator::lengthInferior($string, $length);

        $this->assertTrue($result);
    }

    /**
     * Test if the string is not inferior at the length
     *
     * @throws \Exception
     */
    public function testLengthInferiorFalse()
    {
        $string = "defends";
        $length = (mb_strlen($string)+10);

        $result = StringValidator::lengthInferior($string, $length);

        $this->assertTrue($result);
    }

    /**
     * Test if the string's length is between two lengths
     *
     * @throws \Exception
     */

    public function testLengthBetweenTrue()
    {
        $string = "defends";
        $length = mb_strlen($string);

        $result = StringValidator::lengthBetween($string, $length - 10, $length + 15);

        $this->assertTrue($result);
    }

    /**
     * Test if the string's length is not between two lengths
     *
     * @throws \Exception
     */
    public function testLengthBetweenFalse()
    {
        $string = "defends";
        $length = mb_strlen($string);

        $result = StringValidator::lengthBetween($string, $length + 20, $length + 50);

        $this->assertFalse($result);
    }

    /**
     * Test if the string no has white space
     */
    public function testNoWhiteSpaceTrue()
    {
        $string = "defends";

        $result = StringValidator::noWhiteSpace($string);

        $this->assertTrue($result);
    }

    /**
     * Test if the string has white space
     *
     * @throws \Exception
     */
    public function testNoWhiteSpaceFalse()
    {
        $string = "defends";

        $result = StringValidator::noWhiteSpace($string);

        $this->assertFalse($result);
    }

    /**
     * test if the string has no space at begin and last string ex : 'faff'
     *
     * @throws \Exception
     */
    public function testNoSpaceTrue()
    {
        $string = "defends";

        $result = StringValidator::noSpace($string);

        $this->assertTrue($result);
    }

    /**
     * test if the string has space at begin and last string ex : ' faff '
     *
     * @throws \Exception
     */
    public function testNoWhiteSpaceStartEndFalse()
    {
        $string = "defends";

        $result = StringValidator::noSpace($string);

        $this->assertFalse($result);
    }
}
<?php

/**
 * User : Juba
 */

namespace Tests\ONREPRESENTE\validator;

use ONREPRESENTE\validator\BooleanValidator;

/**
 * Class BooleanValidatorTest
 *
 * @package ONREPRESENTE\validator
 */
class BooleanValidatorTest extends  \PHPUnit_Framework_TestCase
{
    /**
     * Test if the param' is true
     *
     * @param bool $boolean
     *
     * @throws \Exception
     */
    public function testIsTrueTrue()
    {
        $result = BooleanValidator::isTrue(true);
        $this->assertTrue($result);;
    }

    /**
     * Test if the param' is not true
     *
     * @param bool $boolean
     *
     * @throws \Exception
     */
    public function testIsTrueFalse()
    {
        $result = BooleanValidator::isTrue(true);
        $this->assertTrue($result);;
    }
}
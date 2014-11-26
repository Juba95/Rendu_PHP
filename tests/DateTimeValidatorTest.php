<?php

/**
 * User : Juba
 */

namespace Tests\ONREPRESENTE\validator;

use ONREPRESENTE\validator\DateTimeValidator;

/**
 * Class DateTimeValidatorTest
 *
 * @package ONREPRESENTE\validator
 */
class DateTimeValidatorTest extends  \PHPUnit_Framework_TestCase
{

    /**
     * Test if the person is major
     */
    public function testIsMajorTrue()
    {
        $date = new \DateTime('1993-05-08');

        $result = DateTimeValidator::isMajor($date);

        $this->assertTrue($result);
    }

    /**
     *  Test if the person is minor
     */
    public function testIsMajorFalse()
    {
        $date = new \DateTime('2009-05-05');

        $result = DateTimeValidator::isMajor($date);

        $this->assertFalse($result);
    }

    /**
     * Test if the date's year is the same that today
     *
     * @throws \Exception
     */
    public function testIsYearTrue()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isYear($date, $date->format('Y'));

        $this->assertTrue($result);
    }

    /**
     * Test if the date's year is not the same that today
     *
     * @throws \Exception
     */
    public function testIsYearFalse()
    {
        $date = new \DateTime();

        $result = DateTimeValidator::isYear($date, $date->format('m'));

        $this->assertFalse($result);
    }

}
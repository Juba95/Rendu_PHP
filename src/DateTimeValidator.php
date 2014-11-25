<?php
/**
 * User : Juba
 */

namespace ONREPRESENTE\validator;

/**
 * Class DateTimeValidator
 * @package ONREPRESENTE\validator
 */
/**
 * Class DateTimeValidator
 * @package ONREPRESENTE\validator
 */
class DateTimeValidator
{
    /**
     * @param \DateTime $dateTime
     *
     * @return bool
     */
    public static function isMajor(\DateTime $dateTime)
    {
        $now = new \DateTime();
        $interval = $dateTime->diff($now);
        return ($interval->y >= 18) ? true : false;
    }

    /**
     * @param \DateTime $dateTime
     * @param $year
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isYear(\DateTime $dateTime, $year)
    {
        if(!is_string($year))
            throw new \Exception('The month parameter has to be a string.');
        return (date_format($dateTime, 'Y') === $year) ? true : false;
    }

    /**
     * @param $date
     * @param $format
     *
     * @return bool
     */
    public static function validateDateTime ($date, $format)
    {
        $format = 'Y-m-d H:i:s';
        $result = DateTime::createFromFormat($format, $date);
        return $result AND $result->format($format) == $date;
    }
}
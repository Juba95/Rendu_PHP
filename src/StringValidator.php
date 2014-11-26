<?php

/**
 * User : Juba Oumaza
 */


namespace ONREPRESENTE\validator;


/**
 * Class StringValidator
 * @package ONREPRESENTE\validator
 */
class StringValidator
{
    /**
     * @param $string
     * @param $length
     *
     * @throws \Exception
     */
    public static function lengthEqual($string, $length)
    {
        is_string($string);
        is_int($length);

        if (!is_string($string) OR !is_int($length))
        {
            throw new \Exception('error format');
        }
        return mb_strlen($string) === $length ? true : false;
    }

    /**
     * @param $string
     * @param $length
     *
     * @throws \Exception
     */
    public static function lengthSuperior($string, $length)
    {

        is_string($string);
        is_int($length);

        if (!is_string($string) OR !is_int($length))
        {
            throw new \Exception('error format');
        }
        return mb_strlen($string) > $length ? true : false;
    }

    /**
     * @param $string
     * @param $length
     *
     * @throws \Exception
     */
    public static function lengthInferior($string, $length)
    {

        is_string($string);
        is_int($length);

        if (!is_string($string) OR !is_int($length))
        {
            throw new \Exception('error format');
        }
        return mb_strlen($string) < $length ? true : false;
    }

    /**
     * @param $string
     * @param $low
     * @param $high
     *
     * @throws \Exception
     */
    public static function lengthBetween($string, $low, $high)
    {
        is_string($string);
        is_int($low);
        is_int($high);
        $lengthString = mb_strlen($string);

        if (!is_string($string) OR ! is_int($low) AND !is_int($high))
        {
            throw new \Exception('error format');
        }
        return $lengthString >= $low AND $lengthString <= $high ? true : false;
    }

    /**
     * @param $string
     */
    public static function noWhiteSpace($string)
    {
        is_string($string);
        $noSpaceString = trim($string);

        return $noSpaceString != $string ? false : true;
    }

    /**
     * @param $string
     */
    public static function noSpace($string)
    {
        is_string($string);
        $noSpace = str_replace(' ', '', $string);

        return $noSpace != $string ? false : true;
    }
}
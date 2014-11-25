<?php

/**
 * User : Juba
 */

namespace ONREPRESENTE\validator;


/**
 * Class IntegerValidator
 *
 * @package ONREPRESENTE\validator
 */

class IntegerValidator
{

    /**
     * @param $integer
     * @param $integertwo
     */
   public static function equal($integer, $integerTwo)
   {
       return $integer == $integerTwo ? true : false;
   }

    /**
     * @param $integer
     * @param $integerTwo
     */
    public static function superior($integer, $integerTwo)
    {
        return $integer > $integerTwo ? true : false;
    }

    /**
     * @param $integer
     * @param $integerTwo
     */
    public static function inferior($integer, $integerTwo)
    {
        return $integer < $integerTwo ? true : false;
    }

    /**
     * @param $integer
     * @param $low
     * @param $hight
     */
    public static function between($integer, $low, $high)
    {
        return $integer >= $low AND $integer <= $high ? true : false;
    }

    /**
     * @param $integer
     */
    public static function positive($integer)
    {
        return $integer >= 0 ? true : false;
    }

    /**
     * @param $integer
     */
    public static function negative($integer)
    {
        return $integer <= 0 ? true : false;
    }
}
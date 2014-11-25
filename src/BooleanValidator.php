<?php
/**
 * User: Juba
 */

namespace ONREPRESENTE\validator;


/**
 * Class BooleanValidator
 * @package ONREPRESENTE\validator
 */
class BooleanValidator
{
    /**
     * @param bool $boolean
     *
     * @throws \Exception
     */
    public static function isTrue($boolean)
    {
        if(!is_bool($boolean))
            throw new \Exception('Is not a boolean');

        return $boolean ? true : false;
    }

    /**
     * @param bool $boolean
     *
     * @throws \Exception
     */
    public static function isFalse($boolean)
    {
        if(!is_bool($boolean))
            throw new \Exception('Is not a boolean');

        return !$boolean ? true : false;
    }
}
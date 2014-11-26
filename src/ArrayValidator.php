<?php
/**
 * User : Juba
 */

namespace ONREPRESENTE\validator;

/**
 * Class ArrayValidator
 * @package ONREPRESENTE\validator
 */
class ArrayValidator
{
    const EQUAL = 1;
    const INFERIOR = 2;
    const SUPERIOR = 3;
    const INFERIOR_OR_EQUAL = 4;
    const SUPERIOR_OR_EQUAL = 5;

    /**
     * @param $myArray
     * @return bool
     */
    public static function isEmpty($array)
    {
        if(!is_array($array))
            throw new \Exception("Is not an array.");

        return (empty($array)) ? true : false;
    }

    /**
     * @param array $array
     * @param $comparator
     * @param int $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function toCompare($array, $compare, $integer)
    {
        if(!is_array($array) OR !is_int($integer))
            throw new \Exception('Invalid format');

        if (!in_array($compare, [
            self::EQUAL,
            self::SUPERIOR,
            self::INFERIOR,
            self::INFERIOR_OR_EQUAL,
            self::SUPERIOR_OR_EQUAL,
        ])) {
            throw new \InvalidArgumentException('Invalid comparator');
        }

        $arrayLength = count($array);
        $myResult = 0;

        switch ($compare) {
            case self::EQUAL:
                $myResult = $arrayLength === $integer;
                break;
            case self::INFERIOR:
                $myResult = $arrayLength < $integer;
                break;
            case self::SUPERIOR:
                $myResult = $arrayLength > $integer;
                break;
            case self::INFERIOR_OR_EQUAL:
                $myResult = $arrayLength <= $integer;
                break;
            case self::SUPERIOR_OR_EQUAL:
                $myResult = $arrayLength >= $integer;
                break;
        }
        return $myResult;
    }

    /**
     * @param array
     * @param $high
     * @param $low
     *
     * @throws \Exception
     *
     * @return bool
     */
    public static function arrayBetween($array, $high, $low)
    {
        if(!is_array($array) OR !is_int($high) OR !is_int($low))
            throw new \Exception('Invalid format');

        return (count($array) >= $low AND count($array)<= $high) ? true : false;
    }

    /**
     * @param array  $array
     * @param string $key
     *
     * @throws \Exception
     *
     * @return bool
     */
    public static function keyExists($array, $key)
    {
        if(!is_array($array) OR !is_string($key))
            throw new \Exception('Invalid format');

        return (array_key_exists($key, $array)) ? true : false;
    }

    /**
     * @param array  $array
     * @param string $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function valueExist($array, $value)
    {
        if(!is_array($array) OR !is_string($value))
            throw new \Exception('Invalid format');

        return (in_array($value, $array)) ? true : false;
    }

}
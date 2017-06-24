<?php
/**
 * Created by PhpStorm.
 * User: W
 * Date: 2017/6/24
 * Time: 下午12:16
 */

namespace Charlesx2\Hasher;


/**
 * Class MD5Hasher
 * @package Charlesx2\Hasher
 */
class MD5Hasher
{
    /**
     * @param $value
     * @param array $option
     * @return string
     */
    public function make($value, array $option = [])
    {
        $salt = isset($option['salt']) ? $option['salt'] : "";
        return hash('md5', $value . $salt);
    }

    /**
     * @param $value
     * @param $hash_value
     * @param array $option
     * @return bool
     */
    public function check($value, $hash_value, array $option = [])
    {
        $salt = isset($option['salt'])? $option['salt'] : '';
        return hash('md5', $value . $salt) === $hash_value;
    }
}



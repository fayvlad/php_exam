<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 20.02.2015
 * Time: 14:53
 */
class slesh
{
    public $string = '';

    function concatPath($val)
    {
        foreach ($val as $value) {
            if ($value == '') {
                continue;
            }
            if ($value{0} == '/') {
                $value = substr($value, 1);
            }
            if (substr($value, -1) == '/') {
                $value = substr($value, 0, strlen($value) - 1);
            }
            @$string = $string . '/' . $value;
        }
        $order = array("//", "///");
        $newstr = str_replace(' ', '', $string);
        echo $newstr = str_replace($order, '/', $newstr);

    }
} 
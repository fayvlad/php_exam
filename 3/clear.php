<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 23.02.2015
 * Time: 11:34
 */
class clear
{
    public $return = array();
    public $maxsite = 3;

    function clearlink($txt)
    {
        preg_match_all("/(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
            $txt,
            $return,
            PREG_OFFSET_CAPTURE);
        if (count($return[0]) >= $this->maxsite) {
            echo "error";
            return false;
        } else {
            echo $txt;
            return true;
        }
    }

}
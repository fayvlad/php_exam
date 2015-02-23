<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 20.02.2015
 * Time: 16:40
 */
class MyTimeUtils
{
    function getTime($var = '2015-01-01')
    {
        echo $var;
        echo "<br>";
        $var = new DateTime($var);
        $var = $var->format("Y");
        echo $this->firstDate($var);
        echo "<br>";
        echo $this->endDate($var);
    }

    function firstDate($date)
    {
        $date = $date . '-01-01';
        $x = new DateTime($date);
        $z = new DateTime($date);
        $x = $x->format("N");
        switch ($x) {
            case 1:
                $z;
                break;
            case 2:
                $z = $z->modify("-1 day");
                break;
            case 3:
                $z = $z->modify("-2 day");
                break;
            case 4:
                $z = $z->modify("-3 day");
                break;
            case 5:
                $z = $z->modify("-4 day");
                break;
            case 6:
                $z = $z->modify("-5 day");
                break;
            case 7:
                $z = $z->modify("-6 day");
                break;
        }
        return $z->format("Y-m-d");
    }

    function endDate($date)
    {
        $date = $date . '-01-01';
        $x = new DateTime($date);
        $z = new DateTime($date);
        $x = $x->format("N");
        switch ($x) {
            case 1:
                $z = $z->modify("+6 day");
                break;
            case 2:
                $z = $z->modify("+5 day");
                break;
            case 3:
                $z = $z->modify("+4 day");
                break;
            case 4:
                $z = $z->modify("+3 day");
                break;
            case 5:
                $z = $z->modify("+2 day");
                break;
            case 6:
                $z = $z->modify("+1 day");
                break;
        }
        return $z->format("Y-m-d");
    }
}
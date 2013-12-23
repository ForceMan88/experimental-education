<?php
function counter($clear = false)
{
    static $count;

    if ($clear) {
        $temp = $count;
        $count = 0;
        return $temp;
    }

    return $count++ ;
}


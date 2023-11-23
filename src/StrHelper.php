<?php

namespace Myhelper;

class StrHelper
{
    public static function reverse($string)
    {
        return strrev($string);
    }

    public static function capitalize($string)
    {
        return strtoupper($string);
    }
}

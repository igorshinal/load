<?php

namespace Load;

class Test2
{
    public static $probability = [];
    public static $pass = false;

    public function __construct()
    {
//        echo 'Starting TEST2 process with probability with count: 0.6'  . PHP_EOL;
    }

    public function start($probability)
    {
//        self::$pass = true;
//        if (self::$pass) {
            self::$probability[] = $probability;
//        }
    }



}


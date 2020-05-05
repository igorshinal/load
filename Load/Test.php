<?php

namespace Load;

class Test
{
    public static $probability = [];
    public static $pass = false;

    public function __construct()
    {
//        echo 'Starting TEST process with probability with count: 0.5' . PHP_EOL;
    }

    public function start($probability)
    {

//        self::$pass = true;
//        if (self::$pass) {
            self::$probability[] = $probability;
//        }
    }


}
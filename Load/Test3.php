<?php

namespace Load;

class Test3
{
    public static $probability = [];
    public static $pass = false;

    public function __construct()
    {
//        echo 'Starting TEST3 process with probability with count: 0.1'  . PHP_EOL;
    }

    public function start($probability)
    {
//        self::$pass = true;
//        if (self::$pass) {
            self::$probability[] = $probability;
//        }
    }
}

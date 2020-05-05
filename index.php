<?php

use Load\LoadTestRunner;
use Load\Test as Test;
use Load\Test2 as Test2;
use Load\Test3 as Test3;


include './vendor/autoload.php';

$array = [
    ['probability' => 0.5, 'action' => 'Test'],
    ['probability' => 0.6, 'action' => 'Test2'],
    ['probability' => 0.4, 'action' => 'Test3'],

];
$oop = new LoadTestRunner($array);


$test = Test::$probability;
$test2 = Test2::$probability;
$test3 = Test3::$probability;
echo 'Test count: ' . count($test) . PHP_EOL;
echo 'Test2 count: ' . count($test2) . PHP_EOL;
echo 'Test3 count: ' . count($test3) . PHP_EOL;



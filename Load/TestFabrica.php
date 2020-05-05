<?php

namespace Load;

use Load\Test as Test;
use Load\Test2 as Test2;
use Load\Test3 as Test3;

class TestFabrica
{
    public function create($type)
    {
        switch ($type) {

            case 'Test':
                return new Test();

            case 'Test2':
                return new Test2();

            case 'Test3':
                return new Test3();

        }
    }

}

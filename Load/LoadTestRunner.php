<?php

namespace Load;

use Load\TestFabrica as Fabrica;


class LoadTestRunner
{
    public $data;
    public $probability = [];

    public function __construct($array)
    {
        $this->data = $array;
        $this->getAction();
    }

    public function getProbability()
    {
        foreach ($this->data as $key => $item) {
            if (array_key_exists('probability', $item)) {
                $this->probability[] = $item['probability'];
            }
        }
        if (count($this->probability) != 0) {
            $middle_value = array_sum($this->probability) / count($this->probability);
            $lagest_value = max($this->probability);
            $diaposon = $middle_value + mt_rand() / mt_getrandmax() * ($lagest_value - $middle_value);
            $probability_random = round($diaposon, 1);
            return $probability_random;

        }

    }

    public function getAction()
    {
        $get = new Fabrica();

        foreach ($this->data as $item) {

            $object = $get->create($item['action']);

            if (array_key_exists('probability', $item)) {

                for ($i = 0; $i < 30; $i++) {
                    $probability_random = $this->getProbability();
                    if ($item['probability'] >= $probability_random) {
                        $object->start($item['probability']);
                    }
                    if (is_null($object)) {
                        echo 'Tests not found' . PHP_EOL;
                        exit();
                    }
                }
            }
        }
    }
}









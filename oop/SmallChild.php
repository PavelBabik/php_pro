<?php

class SmallChild extends ChildCar
{

    function start()
    {
        parent::start();
        echo 'I am from SmallChild class';
        echo 'I am a ' . $this->model . ' and I START work. And my max speed is ' . $this->max_speed . PHP_EOL;
    }

    function stop()
    {
        echo 'I am from SmallChild class';
        echo 'I am a ' . $this->model . '. I stop now. Have a nice day.' . PHP_EOL;
    }

    function up($unit)
    {
        echo 'I am from SmallChild class';
        $this->speed = $this->speed + $unit;
        if ($this->max_speed - $this->speed === 10) {
            echo 'ATTANTION !!!! Max spped is ' . $this->max_speed . PHP_EOL;
        } else if ($this->speed >= $this->max_speed) {
            $this->speed = 0;
            echo 'EMERGENCY STOP !!!!' . PHP_EOL;
        }
        echo 'Now my speed is ' . $this->speed . '.' . PHP_EOL;
    }

    function down($unit)
    {
        echo 'I am from SmallChild class';
        $this->speed = $this->speed - $unit;
        if ($this->speed <= 0) {
            echo 'Mode parking is turn on.';
        } else {
            echo 'Now my speed is ' . $this->speed . '.' . PHP_EOL;
        }
    }
}
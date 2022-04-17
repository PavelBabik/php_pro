<?php

include 'Car.php';

class ChildCar extends Car
{
    private $type;
    private $speed_type;

    public function __construct(string $model, int $max_speed, string $type, string $speed_type)
    {
        parent::__construct($model, $max_speed);
        $this->type = $type;
        $this->speed_type = $speed_type;
    }

    public function start()
    {
        echo 'I am a ' . $this->model . ' and I START work. And my max speed is ' . $this->max_speed . PHP_EOL;
        echo 'My type is ' . $this->type . PHP_EOL;
    }

    public function up($unit)
    {
        $this->speed = $this->speed + $unit;
        if ($this->max_speed - $this->speed === 10) {
            echo 'ATTANTION !!!! Max spped is ' . $this->max_speed . PHP_EOL;
        } else if ($this->speed >= $this->max_speed) {
            $this->speed = 0;
            echo 'EMERGENCY STOP !!!!' . PHP_EOL;
        }
        echo 'Now my speed is ' . $this->speed . '.' . PHP_EOL;
        echo $this->type . ' is ' . $this->speed_type . PHP_EOL;
    }

    public function stop()
    {
        echo 'I am a ' . $this->model . '. I stop now. Have a nice day.' . PHP_EOL;
    }

    public function down($unit)
    {
        $this->speed = $this->speed - $unit;
        if ($this->speed <= 0) {
            echo 'Mode parking is turn on.';
        } else {
            echo 'Now my speed is ' . $this->speed . '.' . PHP_EOL;
        }
    }
}
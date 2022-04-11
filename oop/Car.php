<?php


class Car
{
    public $speed = 0;
    public $max_speed;
    public $model;

    public function __construct(string $model, int $max_speed)
    {
        $this->model = $model;
        $this->max_speed = $max_speed;
    }

    public function start()
    {
        echo 'I am a ' . $this->model . ' and I START work. And my max speed is ' . $this->max_speed . PHP_EOL;
    }

    public function stop()
    {
        echo 'I am a ' . $this->model . '. I stop now. Have a nice day.' . PHP_EOL;
    }

    public function up(int $unit)
    {
        $this->speed = $this->speed + $unit;
        if ($this->max_speed - $this->speed === 10) {
            echo 'ATTANTION !!!! Max spped is ' . $this->max_speed . PHP_EOL;
        } else if ($this->speed >= $this->max_speed) {
            $this->speed = 0;
            echo 'EMERGENCY STOP !!!!' . PHP_EOL;
        }
        echo 'Now my speed is ' . $this->speed . '.' . PHP_EOL;
    }

    public function down(int $unit)
    {
        $this->speed = $this->speed - $unit;
        if ($this->speed <= 0) {
            echo 'Mode parking is turn on.';
        } else {
            echo 'Now my speed is ' . $this->speed . '.' . PHP_EOL;
        }
    }
}
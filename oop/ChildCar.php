<?php


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
        echo 'My type is ' . $this->type . PHP_EOL;
        parent::start();
    }

    public function up($unit)
    {
        echo $this->type . ' is ' . $this->speed_type . PHP_EOL;
        parent::up($unit);
    }
}
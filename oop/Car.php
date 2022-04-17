<?php

interface MovableInterface
{
    /**
     * Включает зажигание
     * @return mixed
     */
    public function start();

    /**
     * Выключает зажигание
     * @return mixed
     */
    public function stop();

    /**
     * Увеличивает скорость движения
     * @param int $unit
     * @return mixed
     */
    public function up(int $unit);

    /**
     * Уменьшает скорость движения
     * @param int $unit
     * @return mixed
     */
    public function down(int $unit);
}

abstract class Car implements MovableInterface
{
    public $speed = 0;
    public $max_speed;
    public $model;

    public function __construct(string $model, int $max_speed)
    {
        $this->model = $model;
        $this->max_speed = $max_speed;
    }

    abstract function start();

    abstract function stop();

    abstract function up($unit);

    abstract function down($unit);
}
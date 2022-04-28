<?php

include 'MovableInterface.php';

abstract class Car implements \oop\MovableInterface
{
    public $speed = 0;
    protected $max_speed;
    protected $model;

    protected static $country;

    protected static function getCountry()
    {
        return self::$country;
    }

    protected static function setCountry($country)
    {
        self::$country = $country;
    }

    public const COUNTRY_USA = 'USA';
    public const COUNTRY_GERMANY = 'GERMANY';

    public function __construct(string $model, int $max_speed)
    {
        $this->model = $model;
        $this->max_speed = $max_speed;
        if ($this->model === 'Ford') {
            self::setCountry(self::COUNTRY_USA);
        } else {
            self::setCountry(self::COUNTRY_GERMANY);
        }
    }

    abstract function start();

    abstract function stop();

    abstract function up($unit);

    abstract function down($unit);
}
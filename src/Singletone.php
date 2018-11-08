<?php namespace Sanovskiy\Traits;


/**
 * Trait Singletone
 * @package Sanovskiy\Traits
 */
trait Singletone
{
    /**
     * @var Singletone[]
     */
    private static $instances = [];

    protected function __construct(){}

    /**
     * @return Singletone
     */
    public static function getInstance()
    {
        $class = static::class;
        if (!array_key_exists($class, self::$instances) || !(self::$instances[$class] instanceof $class)) {
            self::$instances[$class] = new $class();
        }
        return self::$instances[$class];
    }

}
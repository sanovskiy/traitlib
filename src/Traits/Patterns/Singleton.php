<?php
/**
 * @author    Pavel Terentyev
 * @copyright 2018 Pavel Terentyev <pavel.terentyev@gmail.com>
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License Version 2.0
 */

namespace Sanovskiy\Traits\Patterns;

/**
 * Trait Singleton
 * @package Sanovskiy\Traits\Patterns
 */
trait Singleton
{
    /**
     * @var Singleton[]
     */
    private static $instances = [];

    protected function __construct()
    {
        if (method_exists($this, 'init')) {
            $this->{'init'}(...func_get_args());
        }
    }

    /**
     * @return static
     */
    public static function getInstance()
    {
        $class = static::class;
        if (!array_key_exists($class, self::$instances) || !(self::$instances[$class] instanceof $class)) {
            self::$instances[$class] = new $class(...func_get_args());
        }
        return self::$instances[$class];
    }

}
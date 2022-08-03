<?php
/**
 * @author    Pavel Terentyev
 * @copyright 2018 Pavel Terentyev <pavel.terentyev@gmail.com>
 */

namespace Sanovskiy\Interfaces\Patterns;

/**
 * Interface Singleton
 * @package Sanovskiy\Interfaces\Patterns
 */
interface Singleton
{
    /**
     * @return static
     */
    public static function getInstance();
}
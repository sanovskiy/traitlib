<?php
/**
 * @author    Pavel Terentyev
 * @copyright 2018 Pavel Terentyev <pavel.terentyev@gmail.com>
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License Version 2.0
 */

namespace Sanovskiy\Traits;

/**
 * Trait Iterator
 * @package Sanovskiy\Traits
 * @property array $records
 */
trait Iterator
{
    /**
     * @return void
     */
    public function rewind()
    {
        reset($this->records);
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->records);
    }

    /**
     * @return int|string|null
     */
    public function key()
    {
        return key($this->records);
    }

    /**
     * @return mixed
     */
    public function next()
    {
        return next($this->records);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return $this->current() !== false;
    }
}
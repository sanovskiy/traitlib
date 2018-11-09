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
 */
trait Iterator
{
    /**
     * @var array
     */
    protected $records = [];

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
        $var = current($this->records);
        return $var;
    }

    /**
     * @return mixed
     */
    public function key()
    {
        $var = key($this->records);
        return $var;
    }

    /**
     * @return mixed
     */
    public function next()
    {
        $var = next($this->records);
        return $var;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        $var = $this->current() !== false;
        return $var;
    }

}
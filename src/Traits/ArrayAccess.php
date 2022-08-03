<?php
/**
 * @author    Pavel Terentyev
 * @copyright 2018 Pavel Terentyev <pavel.terentyev@gmail.com>
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License Version 2.0
 */

namespace Sanovskiy\Traits;

/**
 * Trait ArrayAccess
 * @package Sanovskiy\Traits
 */
trait ArrayAccess
{

    /**
     * @var array
     */
    protected  $records = [];

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists( $offset)
    {
        return isset($this->records[$offset]);
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet( $offset)
    {
        if (isset($this->records[$offset])) {
            return $this->records[$offset];
        }
        return null;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     *
     */
    public function offsetSet( $offset,  $value)
    {
        if (empty($offset)) {
            return;
        }
        $this->records[$offset] = $value;

    }

    /**
     * @param mixed $offset
     *
     * @return void
     */
    public function offsetUnset( $offset)
    {
        unset($this->records[$offset]);
    }

}
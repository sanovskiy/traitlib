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
    protected array $records = [];

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->records[$offset]);
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet(mixed $offset): mixed
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
     * @return mixed
     */
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
    {
        unset($this->records[$offset]);
    }

}
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
    protected array $records = [];

    /**
     * @return void
     */
    public function rewind(): void
    {
        reset($this->records);
    }

    /**
     * @return mixed
     */
    public function current(): mixed
    {
        return current($this->records);
    }

    /**
     * @return int|string|null
     */
    public function key(): int|string|null
    {
        return key($this->records);
    }

    /**
     * @return mixed
     */
    public function next(): mixed
    {
        return next($this->records);
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return $this->current() !== false;
    }
}
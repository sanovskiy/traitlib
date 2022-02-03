<?php
/**
 * @author    Pavel Terentyev
 * @copyright 2018 Pavel Terentyev <pavel.terentyev@gmail.com>
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License Version 2.0
 */

namespace Sanovskiy\Traits;

/**
 * Trait Countable
 * @package Sanovskiy\Traits
 */
trait Countable
{
    /**
     * @var array
     */
    protected array $records = [];

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->records);
    }
}
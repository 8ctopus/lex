<?php

/**
 * Part of the Lex Template Parser.
 *
 * @author     PyroCMS Team
 * @license    MIT License
 * @copyright  2011 - 2014 PyroCMS
 */

namespace Lex;

class ArrayableObjectExample implements ArrayableInterface
{
    /**
     * Attributes
     *
     * @var array
     */
    private array $attributes = ['foo' => 'bar'];

    /**
     * Define how the object will be converted to an array
     *
     * @return array
     */
    public function toArray() : array
    {
        return $this->attributes;
    }
}

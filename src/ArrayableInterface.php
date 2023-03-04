<?php

/**
 * Part of the Lex Template Parser.
 *
 * @author     PyroCMS Team
 * @license    MIT License
 * @copyright  2011 - 2014 PyroCMS
 */

namespace Lex;

interface ArrayableInterface
{
    /**
     * Convert the object to an array
     *
     * @return array
     */
    public function toArray() : array;
}

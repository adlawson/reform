<?php

namespace Reform\Attribute;

/**
 * Attribute queue
 * 
 * @package   Reform
 * @copyright Copyright (c) 2012 Andrew Lawson <http://adlawson.com>
 * @license   New BSD License <LICENSE>
 */
class Queue extends \SplQueue
{
    /**
     * Appends the queue with an attribute
     * @param Attribute $attribute
     */
    public function push( Attribute $attribute )
    {
        parent::push( $attribute );
    }

    /**
     * Prepends the queue with an attribute
     * @param Attribute $attribute
     */
    public function unshift( Attribute $attribute )
    {
        parent::unshift( $attribute );
    }

    /**
     * Get the string representation
     * @return string
     */
    public function __toString()
    {
        $output = '';

        foreach ( $this as $attribute )
        {
            $output .= ' ' . $attribute;
        }

        return ltrim( $output, ' ' );
    }
}
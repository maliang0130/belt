<?php namespace Belt;

class Collections {


    /**
     * Convert a value to an array
     *
     * @param  mixed $value
     * @return array
     */
    public function toArray($value)
    {
        return (array) $value;
    }

    /**
     * Whether any values in the $collection pass the $iterator
     *
     * @param  array    $collection
     * @param  \Closure $iterator
     * @return boolean
     */
    public function any(array $collection, \Closure $iterator)
    {
        foreach ($collection as $element)
        {
            if ($iterator($element))
            {
                return true;
            }
        }

        return false;
    }

}

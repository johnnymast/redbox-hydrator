<?php
use Redbox\Hydrate\Hydrator;

if (function_exists('Hydrate') === false) {

    /**
     * @param $destination
     * @return Hydrator
     * @internal param $destination
     */
    function Hydrate ($destination)
    {
        return new Hydrator($destination);
    }
}
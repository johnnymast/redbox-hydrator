<?php
use Redbox\Hydrate\Hydrator;

if (function_exists('Hydrate') == false) {
    function Hydrate ($instance)
    {
        return new Hydrator($instance);
    }
}
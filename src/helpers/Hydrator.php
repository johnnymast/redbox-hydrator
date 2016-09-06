<?php
namespace Redbox\Hydrate\Helpers;
use Redbox\Hydrate\Hydrator;

/**
 * @param $destination
 * @return Hydrator
 * @internal param $destination
 */
function Hydrate($destination)
{
    return new Hydrator($destination);
}

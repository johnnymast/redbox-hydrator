<?php
namespace Redbox\Hydrate;

class Hydrator
{
    /**
     * @var null
     */
    protected $destination = null;
    /**
     * @var array
     */
    protected $source = [];

    /**
     * Hydrator constructor.
     * @param $destination
     * @internal param null $subject
     */
    public function __construct ($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @param $destination
     * @return Hydrator
     */
    public static function hydrate ($destination)
    {
        return new Hydrator($destination);
    }

    /**
     * @param array $source
     * @return null
     * @throws \Exception
     */
    public function with ($source = [])
    {
        if (is_array($source) == false) {
            throw new \Exception('Source should be an array');
        }

        $this->source = $source;

        return $this->run();
    }

    /**
     * @return null
     * @throws \Exception
     */
    private function run ()
    {
        if (is_object($this->destination) == false) {
            throw new \Exception('Destination is not an object');
        }

        /** @var \ReflectionObject $reflection */
        $reflection = new \ReflectionObject($this->destination);

        /** @var \ReflectionProperty[] $properties */
        $properties = $reflection->getProperties();

        foreach ($properties as $property) {
            $name = $property->getName();

            if (isset($this->source[$name])) {
                $value = $this->source[$name];
                $readonly = ($property->isPublic() == false && $property->isStatic() == false);

                if ($readonly == true) {
                    $property->setAccessible(true);
                }
                $property->setValue($this->destination, $value);
            }
        }
        return $this->destination;
    }
}
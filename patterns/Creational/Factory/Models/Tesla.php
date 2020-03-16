<?php
namespace Patterns\Creational\Factory\Models;

class Tesla
{
    /**
     * @var int
     */
    private $maxSpeed = 250;

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function driveDestination(string $destination): string
    {
        return $destination;
    }
}
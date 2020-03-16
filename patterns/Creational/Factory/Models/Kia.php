<?php


namespace Patterns\Creational\Factory\Models;


class Kia
{
    /**
     * @var int
     */
    private $maxSpeed = 150;

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
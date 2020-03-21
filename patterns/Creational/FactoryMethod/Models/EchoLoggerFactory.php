<?php


namespace Patterns\Creational\FactoryMethod\Models;

use Patterns\Creational\FactoryMethod\Interfaces\LoggerFactory;
use Patterns\Creational\FactoryMethod\Interfaces\LoggerInterface;

class EchoLoggerFactory implements LoggerFactory
{

    public function createLogger():LoggerInterface
    {
        return new ConcreteEchoLogger();
    }
}
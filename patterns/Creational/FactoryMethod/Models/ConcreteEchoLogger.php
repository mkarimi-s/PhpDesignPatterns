<?php


namespace Patterns\Creational\FactoryMethod\Models;


use Patterns\Creational\FactoryMethod\Interfaces\LoggerInterface;

class ConcreteEchoLogger implements LoggerInterface
{

    public function log(string $message)
    {
        echo $message;
    }
}
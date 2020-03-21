<?php

namespace Patterns\Creational\FactoryMethod\Interfaces;

interface LoggerFactory
{
    public function createLogger(): LoggerInterface;
}
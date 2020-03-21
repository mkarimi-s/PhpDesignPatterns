<?php


namespace Patterns\Creational\FactoryMethod\Models;

use Patterns\Creational\FactoryMethod\Interfaces\LoggerFactory;
use Patterns\Creational\FactoryMethod\Interfaces\LoggerInterface;

class FileLoggerFactory implements LoggerFactory
{
    private $file_path;

    public function __construct($file_path)
    {
        $this->file_path = $file_path;
    }

    public function createLogger(): LoggerInterface
    {
        return new ConcreteFileLogger($this->file_path);
    }
}
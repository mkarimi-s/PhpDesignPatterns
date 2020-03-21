<?php


namespace Patterns\Creational\FactoryMethod\Models;


use Patterns\Creational\FactoryMethod\Interfaces\LoggerInterface;

class ConcreteFileLogger implements LoggerInterface
{

    private $file_path;

    public function __construct($file_path)
    {
        $this->file_path = $file_path;
    }

    public function log(string $message)
    {
        file_put_contents($this->file_path, sprintf("%s .%s", $message, PHP_EOL), FILE_APPEND);
    }
}
<?php


namespace Patterns\Creational\AbstractFactory\Models;


use Patterns\Creational\AbstractFactory\Interfaces\JsonWriterInterface;

class WinJsonWriter implements JsonWriterInterface
{
    public function write(array $data, bool $formatted): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
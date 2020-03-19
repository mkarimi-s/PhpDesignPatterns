<?php


namespace Patterns\Creational\AbstractFactory\Models;


use Patterns\Creational\AbstractFactory\Interfaces\JsonWriterInterface;

class UnixJsonWriter implements JsonWriterInterface
{

    public function write(array $data, bool $formatted): string
    {
        $options = 0;

        if($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($data, $options);
    }
}
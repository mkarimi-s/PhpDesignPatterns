<?php
namespace Patterns\Creational\AbstractFactory\Interfaces;

interface JsonWriterInterface
{
    public function write(array $data, bool $formatted): string;
}
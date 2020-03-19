<?php
namespace Patterns\Creational\AbstractFactory\Interfaces;

interface CsvWriterInterface
{
    public function write(array $line): string;
}

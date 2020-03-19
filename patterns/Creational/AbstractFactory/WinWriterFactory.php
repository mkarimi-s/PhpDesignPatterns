<?php


namespace Patterns\Creational\AbstractFactory;


use Patterns\Creational\AbstractFactory\Interfaces\CsvWriterInterface;
use Patterns\Creational\AbstractFactory\Interfaces\JsonWriterInterface;
use Patterns\Creational\AbstractFactory\Interfaces\WriterFactoryInterfaces;
use Patterns\Creational\AbstractFactory\Models\WinCsvWriter;
use Patterns\Creational\AbstractFactory\Models\WinJsonWriter;

class WinWriterFactory implements WriterFactoryInterfaces
{
    public function createJsonWriter(): JsonWriterInterface
    {
        return new WinJsonWriter();
    }

    public function createCsvWriter(): CsvWriterInterface
    {
        return new WinCsvWriter();
    }
}
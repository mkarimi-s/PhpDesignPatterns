<?php


namespace Patterns\Creational\AbstractFactory;


use Patterns\Creational\AbstractFactory\Interfaces\CsvWriterInterface;
use Patterns\Creational\AbstractFactory\Interfaces\JsonWriterInterface;
use Patterns\Creational\AbstractFactory\Interfaces\WriterFactoryInterfaces;
use Patterns\Creational\AbstractFactory\Models\UnixCsvWriter;
use Patterns\Creational\AbstractFactory\Models\UnixJsonWriter;

class UnixWriterFactory implements WriterFactoryInterfaces
{

    public function createCsvWriter(): CsvWriterInterface
    {
        return new UnixCsvWriter();
    }

    public function createJsonWriter(): JsonWriterInterface
    {
        return new UnixJsonWriter();
    }
}
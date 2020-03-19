<?php
namespace Patterns\Creational\AbstractFactory\Interfaces;

interface WriterFactoryInterfaces
{
    public function createCsvWriter(): CsvWriterInterface;
    public function createJsonWriter(): JsonWriterInterface;
}
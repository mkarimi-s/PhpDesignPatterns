<?php


namespace Patterns\Creational\AbstractFactory\Models;


use Patterns\Creational\AbstractFactory\Interfaces\CsvWriterInterface;

class UnixCsvWriter implements CsvWriterInterface
{

    public function write(array $line): string
    {
        return sprintf("%s\r\n", join(',', $line));
    }
}
<?php


namespace Test\Creational;


use Patterns\Creational\AbstractFactory\Interfaces\CsvWriterInterface;
use Patterns\Creational\AbstractFactory\Interfaces\JsonWriterInterface;
use Patterns\Creational\AbstractFactory\Interfaces\WriterFactoryInterfaces;
use Patterns\Creational\AbstractFactory\UnixWriterFactory;
use Patterns\Creational\AbstractFactory\WinWriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @param WriterFactoryInterfaces $writerFactoryInterfaces
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactoryInterfaces $writerFactoryInterfaces)
    {
        $this->assertInstanceOf(JsonWriterInterface::class, $writerFactoryInterfaces->createJsonWriter());
        $this->assertInstanceOf(CsvWriterInterface::class, $writerFactoryInterfaces->createCsvWriter());
    }

}
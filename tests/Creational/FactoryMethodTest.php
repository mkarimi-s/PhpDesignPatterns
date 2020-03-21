<?php


namespace Test\Creational;


use Patterns\Creational\FactoryMethod\Models\ConcreteEchoLogger;
use Patterns\Creational\FactoryMethod\Models\ConcreteFileLogger;
use Patterns\Creational\FactoryMethod\Models\EchoLoggerFactory;
use Patterns\Creational\FactoryMethod\Models\FileLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{

    public function testCanCreateEchoLogger()
    {
        $echoLogger = (new EchoLoggerFactory())->createLogger();

        $this->assertInstanceOf(ConcreteEchoLogger::class, $echoLogger);
    }

    public function testCanCreateFileLogger()
    {
        $fileLogger = (new FileLoggerFactory(sys_get_temp_dir()))->createLogger();

        $this->assertInstanceOf(ConcreteFileLogger::class , $fileLogger);
    }
}
<?php


namespace Test\Creational;


use Patterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;
use Patterns\Creational\StaticFactory\Models\FormatNumber;
use Patterns\Creational\StaticFactory\Models\FormatString;
use Exception;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testExeption()
    {
        $this->expectException(Exception::class);

        StaticFactory::factory('object');
    }
}
<?php


namespace Test\Creational;


use Patterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;
use Patterns\Creational\StaticFactory\Models\FormatNumber;
use Patterns\Creational\StaticFactory\Models\FormatString;
use Exception;

class StaticFactoryTest extends TestCase
{
    /**
     * @param string $type
     * @throws Exception
     * @dataProvider provideType
     */
    public function testCanCreateStringOrNumberFormatter(string $type)
    {
        $class = $type === 'string' ? FormatString::class : FormatNumber::class;
        $this->assertInstanceOf($class, StaticFactory::factory($type));
    }

    public function provideType(): array
    {
        return [
            ['number'],
            ['string']
        ];
    }


    public function testException()
    {
        $this->expectException(Exception::class);

        StaticFactory::factory('object');
    }
}
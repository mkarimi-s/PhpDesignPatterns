<?php


namespace Test\Creational;


use Patterns\Creational\Factory\Models\Kia;
use Patterns\Creational\Factory\Models\Tesla;
use PHPUnit\Framework\TestCase;
use Patterns\Creational\Factory\Factory;

class FactoryTest extends TestCase
{
    public function testFactory()
    {
        $tesla = Factory::createTesla();
        $kia = Factory::createKia();

        $this->assertInstanceOf(Tesla::class, $tesla);
        $this->assertInstanceOf(Kia::class, $kia);
    }
}
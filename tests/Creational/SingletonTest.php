<?php

namespace Test\Creational;

use Patterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;


class SingletonTest extends TestCase
{
    public function testUniqueness() {
        $firstInstance = Singleton::getInstance();
        $secondInstance = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstInstance);
        $this->assertSame($firstInstance, $secondInstance);
    }
}
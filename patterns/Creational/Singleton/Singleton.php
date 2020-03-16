<?php

namespace Patterns\Creational\Singleton;

class Singleton
{
    private static $instance;

    public function getInstance()
    {
        if(self::$instance === null) {
            self::$instance = new static();
        }
    }

    private function __construct()
    {
    }
}
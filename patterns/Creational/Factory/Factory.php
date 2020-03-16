<?php
declare(strict_types=1);

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Models\Kia;
use Patterns\Creational\Factory\Models\Tesla;

class Factory
{
    public function createTesla(): Tesla
    {
        return new Tesla();
    }

    public function createKia(): Kia
    {
        return new Kia();
    }
}
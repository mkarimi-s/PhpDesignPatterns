<?php


namespace Patterns\Creational\StaticFactory\Models;


use Patterns\Creational\StaticFactory\Interfaces\Formatter;

class FormatString implements Formatter
{

    public function format(string $input): string
    {
        // TODO: Implement format() method.
        return $input;
    }
}
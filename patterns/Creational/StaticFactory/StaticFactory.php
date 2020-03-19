<?php


namespace Patterns\Creational\StaticFactory;

use Patterns\Creational\StaticFactory\Interfaces\Formatter;
use Patterns\Creational\StaticFactory\Models\FormatNumber;
use Patterns\Creational\StaticFactory\Models\FormatString;

final class StaticFactory
{
    public static function factory(string $type): Formatter
    {
        if($type === 'number') {
            return new FormatNumber();
        }elseif($type === 'string') {
            return new FormatString();
        }

        throw new \Exception('the type you encountered is not valid!');
    }
}
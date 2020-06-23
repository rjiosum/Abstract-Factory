<?php declare(strict_types=1);

namespace App\Classes;

use App\Classes\Interfaces\JsonParser;


class UnixJsonParser implements JsonParser
{

    public function parse(string $input, bool $associative): array
    {
        return [
            'class' => get_class($this),
            'input' => $input,
            'assoc' => $associative
        ];
    }
}
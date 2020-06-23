<?php declare(strict_types=1);

namespace App\Classes\Interfaces;


interface JsonParser
{
    public function parse(string $input, bool $associative): array;
}
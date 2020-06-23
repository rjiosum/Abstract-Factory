<?php declare(strict_types=1);

namespace App\Classes\Interfaces;


interface CsvParser
{
    public function parse(string $input): array;
}
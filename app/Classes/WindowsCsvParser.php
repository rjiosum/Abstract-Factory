<?php declare(strict_types=1);

namespace App\Classes;

use App\Classes\Interfaces\CsvParser;


class WindowsCsvParser implements CsvParser
{
    public function parse(string $input): array
    {
        return [
            'class' => get_class($this),
            'input' => $input
        ];
    }
}
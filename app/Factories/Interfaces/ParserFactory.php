<?php declare(strict_types=1);

namespace App\Factories\Interfaces;

use App\Classes\Interfaces\CsvParser;
use App\Classes\Interfaces\JsonParser;


interface ParserFactory
{
    public function createCsvParser(): CsvParser;

    public function createJsonParser(): JsonParser;
}
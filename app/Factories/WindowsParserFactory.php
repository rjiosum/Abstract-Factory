<?php declare(strict_types=1);

namespace App\Factories;

use App\Factories\Interfaces\ParserFactory;
use App\Classes\Interfaces\CsvParser;
use App\Classes\Interfaces\JsonParser;
use App\Classes\WindowsCsvParser;
use App\Classes\WindowsJsonParser;


class WindowsParserFactory implements ParserFactory
{

    public function createCsvParser(): CsvParser
    {
        return new WindowsCsvParser();
    }

    public function createJsonParser(): JsonParser
    {
        return new WindowsJsonParser();
    }
}
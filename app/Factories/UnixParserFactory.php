<?php declare(strict_types=1);

namespace App\Factories;

use App\Factories\Interfaces\ParserFactory;
use App\Classes\Interfaces\CsvParser;
use App\Classes\Interfaces\JsonParser;
use App\Classes\UnixCsvParser;
use App\Classes\UnixJsonParser;


class UnixParserFactory implements ParserFactory
{

    public function createCsvParser(): CsvParser
    {
        return new UnixCsvParser();
    }

    public function createJsonParser(): JsonParser
    {
        return new UnixJsonParser();
    }
}
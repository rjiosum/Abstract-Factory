<?php declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

use App\Factories\UnixParserFactory;
use App\Factories\WindowsParserFactory;

$windowsFactory = new WindowsParserFactory();
var_dump($windowsFactory->createCsvParser()->parse('Windows CSV Parser'));
var_dump($windowsFactory->createJsonParser()->parse('Windows Json Parser', true));


$unixFactory = new UnixParserFactory();
var_dump($unixFactory->createCsvParser()->parse('Unix CSV Parser'));
var_dump($unixFactory->createJsonParser()->parse('Unix Json Parser', true));
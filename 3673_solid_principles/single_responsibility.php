<?php

/**
* SOLID principles
* Open–closed principle
* EN: The Single-responsibility principle: "There should never be more than one reason for a class to change."[5] In other words, every class should have only one responsibility.
* CZ: je jen jeden duvod proc bychom meli zmenit chovani tridy => kazda trida ma mit pouze jednu zodpovednost
*
* info src https://en.wikipedia.org/wiki/Single-responsibility_principle
* code src https://youtu.be/M5gmbkQQNQQ
*/

class Downloader
{
    public function download()
    {
        return 'file content';
    }
}

class Printer
{
    public function print($file)
    {
        echo 'print file content: ' . $file . PHP_EOL;
    }
}

class Database
{
    public function save($file)
    {
        echo 'save file content to db: ' . $file . PHP_EOL;
    }
}

$downloader = new Downloader();
$file = $downloader->download();
$printer = new Printer();
$printer->print($file);
$downloader = new Database();
$db = new Database();
$db->save($file);

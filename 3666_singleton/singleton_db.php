<?php

/**
* singleton
* class Database as singleton
* example 1
*/
class Database
{
    private static $db;

    // disable direct call
    private function __clone() { }

    // disable direct call
    private function __construct()
    {
        echo 'Only one instance of Database is created' . PHP_EOL;
    }

    public static function connect()
    {
        if (!isset(self::$db)) {
            self::$db = new Database();
        }
        return self::$db;
    }
}

$db1 = Database::connect();
$db2 = Database::connect();
$db3 = Database::connect();

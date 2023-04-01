<?php

/**
* singleton
* class Singleton + class Entity
* example 2
*/
class Singleton
{
    private static Singleton $instance;

    public Entity $entity;

    // disable direct call
    private function __clone() { }

    // disable direct call
    private function __construct()
    {
        echo 'Only one instance of Singleton is created' . PHP_EOL;
        $entity = new Entity('name');
    }

    public static function getInstance() : Singleton
    {
        if (!isset(self::$instance)) {

            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

class Entity
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        echo $this->name . PHP_EOL;
    }
}

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
$singleton3 = Singleton::getInstance();

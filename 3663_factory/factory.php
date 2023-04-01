<?php

/**
* example 2
*
* Factory
*/
class Product
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function Book() : Product
    {
        return new Product('Book');
    }

    public static function Meal() : Product
    {
        return new Product('Meal');
    }
}

$book = Product::Book();
$meal = Product::Meal();

var_dump($book);
var_dump($meal);

<?php

/**
* example 1
*
* Factory Method
*/
class Product
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class FactoryProduct
{
    public function createBook() : Product
    {
        return new Product('Book');
    }

    public function createMeal() : Product
    {
        return new Product('Meal');
    }
}

$factory = new FactoryProduct();

$book = $factory->createBook();
$meal = $factory->createMeal();

var_dump($book);
var_dump($meal);

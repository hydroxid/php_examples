<?php

/**
* example 3
*
* Factory Method with interface and abstract class
*/
abstract class Factory
{
    abstract public function factoryMethod() : Item;

    public function init() : string
    {
        $item = $this->factoryMethod();
        var_dump($item);
        return $item->action();
    }
}

class BookFactory extends Factory
{
    public function factoryMethod() : Item
    {
        return new Book();
    }
}

class MealFactory extends Factory
{
    public function factoryMethod() : Item
    {
        return new Meal();
    }
}

interface Item
{
    public function action() : string;
}

class Book implements Item
{
    public function action() : string
    {
        return 'Book - done';
    }
}

class Meal implements Item
{
    public function action() : string
    {
        return 'Meal - done';
    }
}

function create(Factory $factory)
{
    return $factory->init();
}

$book = create(new BookFactory());
$meal = create(new MealFactory());

var_dump($book);
var_dump($meal);

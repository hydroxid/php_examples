<?php

/**
* example 3
*
* Factory Method with interface and abstract class
*/
abstract class Builder
{
    abstract public function factoryMethod() : Item;

    public function init() : string
    {
        $item = $this->factoryMethod();
        var_dump($item);
        return $item->action();
    }
}

class BookBuilder extends Builder
{
    public function factoryMethod() : Item
    {
        return new Book();
    }
}

class MealBuilder extends Builder
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

function create(Builder $builder)
{
    return $builder->init();
}

$book = create(new BookBuilder());
$meal = create(new MealBuilder());

var_dump($book);
var_dump($meal);

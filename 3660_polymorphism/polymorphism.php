<?php

class Parent1 {
    public function speak()
    {
        echo 'Parent1' . PHP_EOL;
    }
}

class Child1 {
    public function speak()
    {
        echo 'Child1' . PHP_EOL;
    }
}

class Child2 {
    public function speak()
    {
        echo 'Child2' . PHP_EOL;
    }
}


/**
* example 1
*/
(new Parent1())->speak();
(new Child1())->speak();
(new Child2())->speak();


/**
* example 2
*/
$arr = [];
$arr[] = new Parent1();
$arr[] = new Child1();
$arr[] = new Child2();

foreach ($arr as $a)
{
    $a->speak();
}

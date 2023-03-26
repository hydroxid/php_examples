<?php

class Parent1 {
    public function speak()
    {
        echo 'Parent1' . PHP_EOL;
    }
}

class Child1 extends Parent1 {
    public function speak()
    {
        echo 'Child1' . PHP_EOL;
    }
}

class Parent2 {
    public function speak()
    {
        echo 'Parent2' . PHP_EOL;
    }
}


/**
* example 1
*/
(new Parent1())->speak();
(new Child1())->speak();
(new Parent2())->speak();


/**
* example 2
*/
$arr = [];
$arr[] = new Parent1();
$arr[] = new Child1();
$arr[] = new Parent2();

foreach ($arr as $a)
{
    $a->speak();
}

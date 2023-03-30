<?php

/**
 * 1
*/
interface MyClassInterface{
    public function index();
}

class MyClass implements MyClassInterface{
    public function index(){
        echo 'Index OK' . PHP_EOL;
    }
}

$c = new MyClass;
$c->index();


/**
 * 2
*/
interface MyInterface{
   const CONSTANT_CI = 'OK';
   public function index();
 }

 class FirstClass implements MyInterface{
   public function index(){
       echo 'FirstClass Index '.self::CONSTANT_CI . PHP_EOL;
   }

   public function notInInterface(){
       echo 'notInInterface';
   }
 }

   class SecondClass implements MyInterface{
   public function index(){
       echo 'SecondClass Index '.self::CONSTANT_CI . PHP_EOL;
   }
 }

$f = new FirstClass;
$f->index();

$s = new SecondClass;
$s->index();




?>

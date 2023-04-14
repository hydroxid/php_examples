<?php

/**
* SOLID principles
* Single-responsibility principle
* EN: The Open–closed principle: "Software entities ... should be open for extension, but closed for modification."
* CZ: trida by mela byt otevrena rozsireni, ale uzavrena modifikacim
*
* info src https://en.wikipedia.org/wiki/Open%E2%80%93closed_principle
* code src https://youtu.be/M5gmbkQQNQQ
*/

/**
 * interface
 */
interface iCheck
{
    public function check();
}

/**
 * checkers
 */
class EmailChecker implements iCheck
{
    public function check()
    {
        echo 'EmailChecker' . PHP_EOL;
    }
}

class UrlChecker implements iCheck
{
    public function check()
    {
        echo 'UrlChecker' . PHP_EOL;
    }
}

class UserChecker implements iCheck
{
    public function check()
    {
        echo 'UserChecker' . PHP_EOL;
    }
}

/**
 * checker class
 */
class CheckerClass
{
    private $checker = [];

    public function addChecker(iCheck $check)
    {
        $this->checker[] = $check;
    }

    public function check()
    {
        foreach ($this->checker as $checker) {
            $checker->check();
        }
    }
}

$checker = new CheckerClass();
$checker->addChecker(new EmailChecker);
$checker->addChecker(new UrlChecker);
$checker->addChecker(new UserChecker);
$checker->check();

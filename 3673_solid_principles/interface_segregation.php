<?php

/**
* SOLID principles
* Interface segregation principle
* EN: The Interface segregation principle: "Clients should not be forced to depend upon interfaces that they do not use."
* CZ: trida by nemela implementovat interface, ktery nepouziva
* CZ: => trida by nemela implementovat metody, ktere nepouziva
* CZ: => nedelat jeden moc chytry interface, ale pouzit vice interfacu (segregovat je)
*
* info src https://en.wikipedia.org/wiki/Interface_segregation_principle
* code src https://youtu.be/M5gmbkQQNQQ
*/

interface Worker
{
    public function manage();
}

interface Sleepable
{
    public function sleep();
}

interface Workable
{
    public function work();
}

class HumanWorker implements Worker, Workable, Sleepable
{
    public function sleep()
    {
        echo 'sleep' . PHP_EOL;
    }

    public function work()
    {
        echo 'work' . PHP_EOL;
    }

    public function manage()
    {
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements Worker, Workable
{
    public function work()
    {
        echo 'work' . PHP_EOL;
    }

    public function manage()
    {
        $this->work();
    }
}

class Manager
{
    public function hire(Worker $worker)
    {
        $worker->manage();
    }
}

$manager = new Manager;
$manager->hire(new HumanWorker);
$manager->hire(new AndroidWorker);

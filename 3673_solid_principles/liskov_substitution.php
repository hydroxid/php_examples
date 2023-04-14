<?php

/**
* SOLID principles
* Liskov substitution principle
* EN: The Liskov substitution principle: "Functions that use pointers or references to base classes must be able to use objects of derived classes without knowing it."[8] See also design by contract.
* CZ: metody tridy, ktere maji stejny interface, by mely vracet stejny vysledek (datovy typ)
*
* info src https://en.wikipedia.org/wiki/Liskov_substitution_principle
* code src https://youtu.be/M5gmbkQQNQQ
*/

interface LessonRepository
{
    /**
    * @return array
    */
    public function all();
}

class FileLessonRepository implements LessonRepository
{
    public function all() : array
    {
        return [1,2,3];
    }
}

class DatabaseLessonRepository implements LessonRepository
{
    public function all() : array
    {
        $items = new SplFixedArray(3);
        // items aren't array, we must return correct type
        return $items->toArray();
    }
}

var_dump((new FileLessonRepository())->all());
var_dump((new DatabaseLessonRepository())->all());

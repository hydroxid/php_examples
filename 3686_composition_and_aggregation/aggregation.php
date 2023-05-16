<?php

/**
* aggregation example
*/
class Person
{
   private $name;
   private $address;

   public function __construct(string $name, string $address)
   {
        $this->name = $name;
        $this->address = $address;
   }

   public function getName()
   {
        return $this->name;
   }

   public function getAddress()
   {
        return $this->address;
   }
}

class AddressBook {
    private $persons = [];
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    // difference from composition example
    public function addPerson($person)
    {
        // difference from composition example
        $this->persons[] = $person;
    }

    public function getPersons()
    {
        return $this->persons;
    }
}

$addressBook = new AddressBook('My address book (with aggregation)');
// difference from composition example
$addressBook->addPerson(new Person('Tom', 'Street 7, Town 34237'));
$addressBook->addPerson(new Person('John', 'Street 3, Small Town 43564'));
$addressBook->addPerson(new Person('Doe', 'Street 88, Big City 33664'));

echo $addressBook->getName() . PHP_EOL;
foreach ($addressBook->getPersons() as $person) {
    echo $person->getName() . PHP_EOL;
    echo $person->getAddress() . PHP_EOL;
}

?>

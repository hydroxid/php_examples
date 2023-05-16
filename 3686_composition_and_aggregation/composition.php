<?php

/**
* composition example
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

    // difference from aggregation example
    public function addPerson($name, $address)
    {
        // difference from aggregation example
        $this->persons[] = new Person($name, $address);
    }

    public function getPersons()
    {
        return $this->persons;
    }
}

$addressBook = new AddressBook('My address book (with composition)');
// difference from aggregation example
$addressBook->addPerson('Tom', 'Street 7, Town 34237');
$addressBook->addPerson('John', 'Street 3, Small Town 43564');
$addressBook->addPerson('Doe', 'Street 88, Big City 33664');

echo $addressBook->getName() . PHP_EOL;
foreach ($addressBook->getPersons() as $person) {
    echo $person->getName() . PHP_EOL;
    echo $person->getAddress() . PHP_EOL;
}


?>

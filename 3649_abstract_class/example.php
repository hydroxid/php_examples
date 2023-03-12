<?php

/**
 * 1
*/
abstract class AbstractParent {

  public $name;

  public function __construct($name) {

    $this->name = $name;

  }

  abstract public function getName() : string;

}


class Child extends AbstractParent {

  public function getName() : string {

    return "Name is $this->name";

  }

}

$child = new Child("John");

echo $child->getName();

?>

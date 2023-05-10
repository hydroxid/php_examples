<?php


/**
 * 1
 * basic
*/
enum Components
{
    case Fork;
    case Drivetrain;
    case Brake;
    case Wheel;
    case Tyre;
}

// are var1 and var2 equal?
$var1 = Components::Brake;
$var2 = Components::Brake;
var_dump($var1 === $var2);


/**
 * 2
 * using values
*/
enum MtbComponents: string
{
    case Fork = 'Fox 34';
    case Drivetrain = 'Shimano Deore XT';
    case Brake = 'Shimano MT400';
    case Wheel = '29er';
    case Tyre = 'Schwalbe Nobby Nic';
}

// get value of Drivetrain
$var3 = MtbComponents::Drivetrain;
echo $var3->value . PHP_EOL;

// get all values
var_dump(MtbComponents::cases());


/**
 * 3
 * get name of enum
*/
enum Bikes
{
  	case Mtb;
  	case Gravel;
  	case Route;

  	public function getName(): string
  	{
  	    return $this->name;
  	}
}

function bikeType(Bikes $bikes): void
{
    echo "Bike: " . $bikes->getName();
}

bikeType(Bikes::Mtb);

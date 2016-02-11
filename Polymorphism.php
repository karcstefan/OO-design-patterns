<?php

interface Car 
{	
	public function effectiveness();
}

abstract class Coupe implements Car
{
	protected $_seats;
}

abstract class Sedan implements Car
{
	protected $_seats;
	protected $_doors;
}

class MercedesBenz extends Sedan 
{
	public function __construct($engineSize, $hp)
	{
		$this->_engineSize = $engineSize;
		$this->_hp = $hp;
		$this->_seats = 5;
		$this->_doors = 5;
	}
	
	public function effectiveness()
	{
		return ($this->_hp * 1.4) / $this->_engineSize;
	}
	
	public function getDoors()
	{
		return $this->_doors;
	}
}

class BMW extends Coupe
{
	public function __construct($engineSize, $hp)
	{
		$this->_engineSize = $engineSize;
		$this->_hp = $hp;
		$this->_seats = 5;
		$this->_doors = 2;
	}
	
	public function effectiveness()
	{
		return ($this->_hp * 1.1) / $this->_engineSize;
	}
	
	public function getSeats()
	{
		return $this->_seats;
	}
}

function compare(Car $A, Car $B)
{
	// Random calculation just for the sake of the example
	return $A->effectiveness() > $B->effectiveness() ? get_class($A) : get_class($B);
}


$CarA = new BMW(121, 3.0);
$CarB = new MercedesBenz(101, 2.5);
echo "More effective car is: ".compare($CarA, $CarB)." <br />";

?>
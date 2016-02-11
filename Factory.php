<?php

class TV
{
	public function __construct($manufacturer, $type)
	{
		$this->_manufacturer = $manufacturer;
		$this->_type = $type;
	}
	
	public function getManufacturer() { return $this->_manufacturer; }
	public function getType() { return $this->_type; }
}

class TVFactory
{
	public static function create($manufacturer, $type)
	{
		return new TV($manufacturer, $type);
	}
}

$modernTV = TVFactory::create("LG", "LCD");
echo "A new TV has been produced by ".$modernTV->getManufacturer()." with ".$modernTV->getType()." display";

?>
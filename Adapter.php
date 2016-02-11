<?php

class Shipment
{
	public function __construct() {}
	
	public function ship($object)
	{
		echo $object . " shipped!";
	}
}

interface shipmentAdapter
{
	public function ship($object);
}

class ebayAdapter implements shipmentAdapter
{
	private $_shipment;
	public function __construct(Shipment $shipment)
	{
		$this->_shipment = $shipment;
	}
	
	public function ship($object)
	{
		$this->_shipment->ship($object);
	}
}

$transfer = new ebayAdapter(new Shipment);
$transfer->ship("Cookies");
?>
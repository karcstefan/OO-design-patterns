<?php

class Singleton
{
	private static $instance;
	
	public static function getInstance()
	{
		if(!static::$instance)
			static::$instance = new static();
		
		return static::$instance;
	}
	
	public function __construct() {}
	public function testSingleton()
	{
		return "It works";
	}
}

echo Singleton::getInstance()->testSingleton();

?>
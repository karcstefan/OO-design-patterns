<?php

trait Categories 
{
	public function checkCategory() { return $this->_category; }
}

trait Tags
{
	public function checkTag() { return $this->_tags; }
}

class Content
{
	use Categories, Tags;
	
	private $_category 	= "This is a category";
	private $_tags 		= "This is a tag";
	
	//public static function FakeORM() { return static(); }
}

$content = new Content;

echo $content->checkTag()."<br />";
echo $content->checkCategory()."<br />";





?>
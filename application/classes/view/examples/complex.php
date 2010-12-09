<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Complex extends View_Examples_Template
{
	public $example_title = 'Complex Example';

	public $header = 'Colors';

	public $item = array(
			array('name' => 'red', 'current' => true, 'url' => '#Red'),
			array('name' => 'green', 'current' => false, 'url' => '#Green'),
			array('name' => 'blue', 'current' => false, 'url' => '#Blue')
	);

	public function notEmpty()
	{
		return ! ($this->isEmpty());
	}

	public function isEmpty()
	{
		return count($this->item) === 0;
	}

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/complex');
	}

	function php_class()
	{
		$data = 'public $header = \'Colors\';'."\n\n";
		$data .= 'public $item = array('."\n";
		$data .= '	array(\'name\' => \'red\', \'current\' => true, \'url\' => \'#Red\'),'."\n";
		$data .= '	array(\'name\' => \'green\', \'current\' => false, \'url\' => \'#Green\'),'."\n";
		$data .= '	array(\'name\' => \'blue\', \'current\' => false, \'url\' => \'#Blue\')'."\n";
		$data .= ');'."\n\n";
		$data .= 'public function notEmpty()'."\n";
		$data .= '{'."\n";
		$data .= '	return ! ($this->isEmpty());'."\n";
		$data .= '}'."\n\n";
		$data .= 'public function isEmpty()'."\n";
		$data .= '{'."\n";
		$data .= '	return count($this->item) === 0;'."\n";
		$data .= '}'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/complex', NULL, NULL, TRUE);
	}

}
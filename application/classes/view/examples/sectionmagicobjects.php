<?php

defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_SectionMagicObjects extends View_Examples_Template
{

	public $example_title = 'Section Magic Objects Example';
	public $start = "It worked the first time.";

	public function middle()
	{
		return new MagicObject();
	}

	public $final = "Then, surprisingly, it worked the final time.";

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/section_magic_objects');
	}

	function php_class()
	{
		$data = 'public $start = "It worked the first time.";'."\n";
		$data .= "\n";
		$data .= 'public function middle() {'."\n";
		$data .= '	return new MagicObject();'."\n";
		$data .= '}'."\n";
		$data .= "\n";
		$data .= 'public $final = "Then, surprisingly, it worked the final time.";'."\n";

		$data2 = 'class MagicObject'."\n";
		$data2 .= '{'."\n";
		$data2 .= '	protected $_data = array('."\n";
		$data2 .= '		\'foo\' => \'And it worked the second time.\','."\n";
		$data2 .= '		\'bar\' => \'As well as the third.\''."\n";
		$data2 .= '	);'."\n";
		$data2 .= "\n";
		$data2 .= '	public function __get($key)'."\n";
		$data2 .= '	{'."\n";
		$data2 .= '		return isset($this->_data[$key]) ? $this->_data[$key] : NULL;'."\n";
		$data2 .= '	}'."\n";
		$data2 .= "\n";
		$data2 .= '	public function __isset($key)'."\n";
		$data2 .= '	{'."\n";
		$data2 .= '		return isset($this->_data[$key]);'."\n";
		$data2 .= '	}'."\n";
		$data2 .= '}'."\n";

		return parent::format_class($data).parent::format_class($data2);;
	}

	function output()
	{
		return parent::get_output('examples/section_magic_objects');
	}

}

class MagicObject
{
	protected $_data = array(
			'foo' => 'And it worked the second time.',
			'bar' => 'As well as the third.'
	);

	public function __get($key)
	{
		return isset($this->_data[$key]) ? $this->_data[$key] : NULL;
	}

	public function __isset($key)
	{
		return isset($this->_data[$key]);
	}
}
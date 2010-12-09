<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_SectionIteratorObjects extends View_Examples_Template
{
	public $example_title = 'Section Iterator Objects Example';

	public $start = "It worked the first time.";

	protected $_data = array(
		array('item' => 'And it worked the second time.'),
		array('item' => 'As well as the third.')
	);

	public function middle() {
		return new ArrayIterator($this->_data);
	}

	public $final = "Then, surprisingly, it worked the final time.";

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/section_iterator_objects');
	}

	function php_class()
	{
		$data = 'public $start = "It worked the first time.";'."\n";
		$data .= "\n";
		$data .= 'protected $_data = array('."\n";
		$data .= '	array(\'item\' => \'And it worked the second time.\'),'."\n";
		$data .= '	array(\'item\' => \'As well as the third.\')'."\n";
		$data .= ');'."\n";
		$data .= "\n";
		$data .= 'public function middle() {'."\n";
		$data .= '	return new ArrayIterator($this->_data);'."\n";
		$data .= '}'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/section_iterator_objects');
	}

}
<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Partials extends View_Examples_Template
{
	public $example_title = 'Partials Example';

	public $name = 'ilmich';

	public $data2 = array(
			array('name' => 'federica', 'age' => 27, 'gender' => 'female'),
			array('name' => 'marco', 'age' => 32, 'gender' => 'male')
	);

	protected $_partials = array(
			'children' => "{{#data2}}{{name}} - {{age}} - {{gender}}\n{{/data2}}",
	);

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/partials');
	}

	function php_class()
	{
		$data = 'public $name = \'ilmich\';'."\n";
		$data .= "\n";
		$data .= 'public $data2 = array('."\n";
		$data .= '	array(\'name\' => \'federica\', \'age\' => 27, \'gender\' => \'female\'),'."\n";
		$data .= '	array(\'name\' => \'marco\', \'age\' => 32, \'gender\' => \'male\')'."\n";
		$data .= ');'."\n";
		$data .= "\n";
		$data .= 'protected $_partials = array('."\n";
		$data .= '	\'children\' => "{{#data2}}{{name}} - {{age}} - {{gender}}\n{{/data2}}",'."\n";
		$data .= ');'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		$view_data = array('name' => $this->name, 'data2' => $this->data2);
		return parent::get_output('examples/partials', $view_data, $this->_partials);
	}

}
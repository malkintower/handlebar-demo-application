<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_RecursivePartials extends View_Examples_Template
{
	public $example_title = 'Recursive Partials Example';

	protected $_partials = array(
		'child' => " > {{ name }}{{#child}}{{>child}}{{/child}}",
	);

	public $name = 'George';

	public $child = array(
		'name'  => 'Dan',
		'child' => array(
			'name'  => 'Justin',
			'child' => false
		)
	);

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/recursive_partials');
	}

	function php_class()
	{
		$data = 'protected $_partials = array('."\n";
		$data .= '	\'child\' => " > {{ name }}{{#child}}{{>child}}{{/child}}",'."\n";
		$data .= ');'."\n";
		$data .= "\n";
		$data .= 'public $name = \'George\';'."\n";
		$data .= "\n";
		$data .= 'public $child = array('."\n";
		$data .= '	\'name\'  => \'Dan\','."\n";
		$data .= '	\'child\' => array('."\n";
		$data .= '		\'name\'  => \'Justin\','."\n";
		$data .= '		\'child\' => false'."\n";
		$data .= '	)'."\n";
		$data .= ');'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		$view_data = array('name' => $this->name, 'child' => $this->child);
		return parent::get_output('examples/recursive_partials', $view_data, $this->_partials);
	}

}
<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_DotNotation extends View_Examples_Template
{
	public $example_title = 'Dot Notation Example';

	public $person = array(
			'name' => array('first' => 'Chris', 'last' => 'Firescythe'),
			'age' => 24,
			'hometown' => array(
					'city' => 'Cincinnati',
					'state' => 'OH'
			)
	);

	public $normal = 'Normal';

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/dot_notation');
	}

	function php_class()
	{
		$data = 'public $person = array('."\n";
		$data .= '	\'name\' => array(\'first\' => \'Chris\', \'last\' => \'Firescythe\'),'."\n";
		$data .= '	\'age\' => 24,'."\n";
		$data .= '	\'hometown\' => array('."\n";
		$data .= '		\'city\' => \'Cincinnati\','."\n";
		$data .= '		\'state\' => \'OH\''."\n";
		$data .= '	)'."\n";
		$data .= ');'."\n\n";
		$data .= 'public $normal = \'Normal\';'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/dot_notation');
	}

}
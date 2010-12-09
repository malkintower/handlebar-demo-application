<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_PragmasInPartials extends View_Examples_Template
{
	public $example_title = 'Pragmas In Partials Unescaped Example';

	public $say = '< RAWR!! >';

	protected $_partials = array(
		'dinosaur' => '{{say}}'
	);

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/pragmas_in_partials');
	}

	function php_class()
	{
		$data = 'public $say = \'< RAWR!! >\';'."\n";
		$data .= "\n";
		$data .= 'protected $_partials = array('."\n";
		$data .= '	\'dinosaur\' => \'{{say}}\''."\n";
		$data .= ');'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/pragmas_in_partials', array('say' => $this->say), $this->_partials);
	}

}
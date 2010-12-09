<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_ImplicitIterator extends View_Examples_Template
{
	public $example_title = 'Implicit Iterator Example';

	protected $data2 = array('Donkey Kong', 'Luigi', 'Mario', 'Peach', 'Yoshi');

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/implicit_iterator');
	}

	function php_class()
	{
		$data = 'protected $data2 = array(\'Donkey Kong\', \'Luigi\', \'Mario\', \'Peach\', \'Yoshi\');'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/implicit_iterator');
	}

}
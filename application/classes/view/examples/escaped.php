<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Escaped extends View_Examples_Template
{
	public $example_title = 'Escaped Example';

	public $title = '"Bear" > "Shark"';

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/escaped');
	}

	function php_class()
	{
		$data = 'public $title = \'"Bear" > "Shark"\';'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/escaped', NULL, NULL, TRUE);
	}

}
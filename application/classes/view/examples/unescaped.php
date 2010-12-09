<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Unescaped extends View_Examples_Template
{
	public $example_title = 'Unescaped Example';

	public $title = "Bear > Shark";

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/unescaped');
	}

	function php_class()
	{
		$data = 'public $title = "Bear > Shark";'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/unescaped');
	}

}
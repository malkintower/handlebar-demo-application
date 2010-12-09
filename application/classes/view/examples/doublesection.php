<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_DoubleSection extends View_Examples_Template
{
	public $example_title = 'Double Section Example';

	public function t()
	{
		return true;
	}

	public $two = "second";

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/double_section');
	}

	function php_class()
	{
		$data = 'public function t()'."\n";
		$data .= '{'."\n";
		$data .= '	return true;'."\n";
		$data .= '}'."\n\n";
		$data .= 'public $two = "second";'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/double_section');
	}

}
<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_InvertedDoubleSection extends View_Examples_Template
{
	public $example_title = 'Inverted Double Section Example';

	public $t = false;

	public $two = 'second';

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/inverted_double_section');
	}

	function php_class()
	{
		$data = 'public $t = false;'."\n";
		$data .= "\n";
		$data .= 'public $two = \'second\';'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/inverted_double_section');
	}

}
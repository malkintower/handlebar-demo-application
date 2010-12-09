<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_InvertedSection extends View_Examples_Template
{
	public $example_title = 'Inverted Section Example';

	public $repo = array();

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/inverted_section');
	}

	function php_class()
	{
		$data = 'public $repo = array();'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/inverted_section');
	}

}
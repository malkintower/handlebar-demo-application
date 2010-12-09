<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_PragmaUnescaped extends View_Examples_Template
{
	public $example_title = 'Pragma Unescaped Example';

	public $vs = 'Bear > Shark';

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/pragma_unescaped');
	}

	function php_class()
	{
		$data = 'public $vs = \'Bear > Shark\';'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/pragma_unescaped');
	}

}
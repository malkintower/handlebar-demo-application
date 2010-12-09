<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Comments extends View_Examples_Template
{
	public $example_title = 'Comments Example';

	public function title()
	{
		return 'A Comedy of Errors';
	}

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/comments');
	}

	function php_class()
	{
		$data = 'public function title()'."\n";
		$data .= '{'."\n";
		$data .= '	return \'A Comedy of Errors\';'."\n";
		$data .= '}'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/comments', NULL, NULL, TRUE);
	}

}
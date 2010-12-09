<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Utf8 extends View_Examples_Template
{
	public $example_title = 'Utf8 Example';

	public $test = '中文又来啦';

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/utf8');
	}

	function php_class()
	{
		$data = 'public $test = \'中文又来啦\';'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/utf8', NULL, NULL, TRUE);
	}

}
<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Utf8Unescaped extends View_Examples_Template
{
	public $example_title = 'Utf8 Unescaped Example';

	public $test = '中文又来啦';

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/utf8_unescaped');
	}

	function php_class()
	{
		$data = 'public $test = \'中文又来啦\';'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/utf8_unescaped', NULL, NULL, TRUE);
	}

}
<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_SectionObjects extends View_Examples_Template
{
	public $example_title = 'Section Objects Example';

	public $start = "It worked the first time.";

	public function middle()
	{
		return new SectionObject;
	}

	public $final = "Then, surprisingly, it worked the final time.";

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/section_objects');
	}

	function php_class()
	{
		$data = 'public $start = "It worked the first time.";'."\n";
		$data .= "\n";
		$data .= 'public function middle()'."\n";
		$data .= '{'."\n";
		$data .= '	return new SectionObject;'."\n";
		$data .= '}'."\n";
		$data .= "\n";
		$data .= 'public $final = "Then, surprisingly, it worked the final time.";'."\n";

		$data2 = 'class SectionObject'."\n";
		$data2 .= '{'."\n";
		$data2 .= '	public $foo = \'And it worked the second time.\';'."\n";
		$data2 .= '	public $bar = \'As well as the third.\';'."\n";
		$data2 .= '}'."\n";

		return parent::format_class($data).parent::format_class($data2);
	}

	function output()
	{
		return parent::get_output('examples/section_objects');
	}

}

class SectionObject
{
	public $foo = 'And it worked the second time.';
	public $bar = 'As well as the third.';
}
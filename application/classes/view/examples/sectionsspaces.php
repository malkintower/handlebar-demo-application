<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_SectionsSpaces extends View_Examples_Template
{
	public $example_title = 'Sections Spaces Example';

	public $start = "It worked the first time.";

	public function middle()
	{
		return array(
				array('item' => "And it worked the second time."),
				array('item' => "As well as the third."),
		);
	}

	public $final = "Then, surprisingly, it worked the final time.";

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/sections_spaces');
	}

	function php_class()
	{
		$data = 'public $start = "It worked the first time.";'."\n";
		$data .= "\n";
		$data .= 'public function middle()'."\n";
		$data .= '{'."\n";
		$data .= '	return array('."\n";
		$data .= '		array(\'item\' => "And it worked the second time."),'."\n";
		$data .= '		array(\'item\' => "As well as the third.")'."\n";
		$data .= '	);'."\n";
		$data .= '}'."\n";
		$data .= "\n";
		$data .= 'public $final = "Then, surprisingly, it worked the final time.";'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/sections_spaces');
	}

}
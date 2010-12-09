<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Simple extends View_Examples_Template
{
	public $example_title = 'Simple Example';

	public $name = "Chris";

	public $value = 10000;

	public function taxed_value()
	{
		return $this->value - ($this->value * 0.4);
	}

	public $in_ca = true;

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/simple');
	}

	function php_class()
	{
		$data = 'public $name = "Chris";'."\n";
		$data .= "\n";
		$data .= 'public $value = 10000;'."\n";
		$data .= "\n";
		$data .= 'public function taxed_value()'."\n";
		$data .= '{'."\n";
		$data .= '	return $this->value - ($this->value * 0.4);'."\n";
		$data .= '}'."\n";
		$data .= "\n";
		$data .= 'public $in_ca = true;'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/simple');
	}

}
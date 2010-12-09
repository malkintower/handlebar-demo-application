<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_PartialsWithViewClass extends View_Examples_Template
{
	public $example_title = 'Partials With View Class Example';

	public $partial_view;

	public $partials;

	function before()
	{
		parent::before();

		$this->partial_view = new StdClass();

		$this->partial_view->name = 'ilmich';

		$this->partial_view->data2 = array(
			array('name' => 'federica', 'age' => 27, 'gender' => 'female'),
			array('name' => 'marco', 'age' => 32, 'gender' => 'male')
		);

		$this->partials = array(
			'children' => "{{#data2}}{{name}} - {{age}} - {{gender}}\n{{/data2}}"
		);
	}

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/partials_with_view_class');
	}

	function php_class()
	{
		$data = 'public $partial_view;'."\n";
		$data .= "\n";
		$data .= 'public $partials;'."\n";
		$data .= "\n";
		$data .= 'function before()'."\n";
		$data .= '{'."\n";
		$data .= '	parent::before();'."\n";
		$data .= "\n";
		$data .= '	$this->partial_view = new StdClass();'."\n";
		$data .= "\n";
		$data .= '	$this->partial_view->name = \'ilmich\';'."\n";
		$data .= "\n";
		$data .= '	$this->partial_view->data2 = array('."\n";
		$data .= '		array(\'name\' => \'federica\', \'age\' => 27, \'gender\' => \'female\'),'."\n";
		$data .= '		array(\'name\' => \'marco\', \'age\' => 32, \'gender\' => \'male\')'."\n";
		$data .= '	);'."\n";
		$data .= "\n";
		$data .= '	$this->partials = array('."\n";
		$data .= '		\'children\' => "{{#data2}}{{name}} - {{age}} - {{gender}}\n{{/data2}}"'."\n";
		$data .= '	);'."\n";
		$data .= "}\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/partials_with_view_class', $this->partial_view, $this->partials);
	}

}
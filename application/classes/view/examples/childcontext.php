<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Childcontext extends View_Examples_Template
{
	public $example_title = 'Child Context Example';

	public $parent = array(
			'child' => 'child works'
	);

	public $grandparent = array(
			'parent' => array(
					'child' => 'grandchild works'
			)
	);

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/child_context');
	}

	function php_class()
	{
		$data = 'public $parent = array('."\n";
		$data .= '	\'child\' => \'child works\''."\n";
		$data .= ');'."\n";
		$data .= "\n";
		$data .= 'public $grandparent = array('."\n";
		$data .= '	\'parent\' => array('."\n";
		$data .= '		\'child\' => \'grandchild works\''."\n";
		$data .= '	)'."\n";
		$data .= ');'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/child_context', NULL, NULL, TRUE);
	}

}
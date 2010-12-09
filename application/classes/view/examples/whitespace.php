<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Whitespace extends View_Examples_Template
{
	public $example_title = 'Whitespace Example';

	public $foo = 'alpha';

	public $bar = 'beta';

	public function baz()
	{
		return 'gamma';
	}

	public function qux()
	{
		return array(
				array('key with space' => 'A'),
				array('key with space' => 'B'),
				array('key with space' => 'C'),
				array('key with space' => 'D'),
				array('key with space' => 'E'),
				array('key with space' => 'F'),
				array('key with space' => 'G')
		);
	}

	protected $_partials = array(
			'alphabet' => " * {{.}}\n",
	);

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/whitespace');
	}

	function php_class()
	{
		$data = 'public $foo = \'alpha\';'."\n";
		$data .= "\n";
		$data .= 'public $bar = \'beta\';'."\n";
		$data .= "\n";
		$data .= 'public function baz()'."\n";
		$data .= '{'."\n";
		$data .= '	return \'gamma\';'."\n";
		$data .= '}'."\n";
		$data .= "\n";
		$data .= 'public function qux()'."\n";
		$data .= '{'."\n";
		$data .= '	return array('."\n";
		$data .= '		array(\'key with space\' => \'A\'),'."\n";
		$data .= '		array(\'key with space\' => \'B\'),'."\n";
		$data .= '		array(\'key with space\' => \'C\'),'."\n";
		$data .= '		array(\'key with space\' => \'D\'),'."\n";
		$data .= '		array(\'key with space\' => \'E\'),'."\n";
		$data .= '		array(\'key with space\' => \'F\'),'."\n";
		$data .= '		array(\'key with space\' => \'G\')'."\n";
		$data .= '	);'."\n";
		$data .= '}'."\n";
		$data .= "\n";
		$data .= 'protected $_partials = array('."\n";
		$data .= '	\'alphabet\' => " * {{.}}\n",'."\n";
		$data .= ');'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		$view_data = array(
				'foo' => $this->foo,
				'bar' => $this->bar,
				'baz' => $this->baz(),
				'qux' => $this->qux()
		);
		return parent::get_output('examples/whitespace', $view_data, $this->_partials);
	}

}
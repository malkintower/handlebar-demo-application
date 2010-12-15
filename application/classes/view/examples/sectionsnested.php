<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_SectionsNested extends View_Examples_Template
{

	public $example_title = 'Sections Nested Example';

	public $name = 'Little Mac';

	public function enemies()
	{
		return array(
				array(
						'name' => 'Von Kaiser',
						'enemies' => array(
								array('name' => 'Super Macho Man'),
								array('name' => 'Piston Honda'),
								array('name' => 'Mr. Sandman'),
						)
				),
				array(
						'name' => 'Mike Tyson',
						'enemies' => array(
								array('name' => 'Soda Popinski'),
								array('name' => 'King Hippo'),
								array('name' => 'Great Tiger'),
								array('name' => 'Glass Joe'),
						)
				),
				array(
						'name' => 'Don Flamenco',
						'enemies' => array(
								array('name' => 'Bald Bull'),
						)
				),
		);
	}

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/sections_nested');
	}

	function php_class()
	{
		$data = 'public $name = \'Little Mac\';'."\n";
		$data .= "\n";
		$data .= 'public function enemies()'."\n";
		$data .= '{'."\n";
		$data .= '	return array('."\n";
		$data .= '		array('."\n";
		$data .= '			\'name\' => \'Von Kaiser\','."\n";
		$data .= '			\'enemies\' => array('."\n";
		$data .= '				array(\'name\' => \'Super Macho Man\'),'."\n";
		$data .= '				array(\'name\' => \'Piston Honda\'),'."\n";
		$data .= '				array(\'name\' => \'Mr. Sandman\'),'."\n";
		$data .= '			)'."\n";
		$data .= '		),'."\n";
		$data .= '		array('."\n";
		$data .= '			\'name\' => \'Mike Tyson\','."\n";
		$data .= '			\'enemies\' => array('."\n";
		$data .= '				array(\'name\' => \'Soda Popinski\'),'."\n";
		$data .= '				array(\'name\' => \'King Hippo\'),'."\n";
		$data .= '				array(\'name\' => \'Great Tiger\'),'."\n";
		$data .= '				array(\'name\' => \'Glass Joe\'),'."\n";
		$data .= '			)'."\n";
		$data .= '		),'."\n";
		$data .= '		array('."\n";
		$data .= '			\'name\' => \'Don Flamenco\','."\n";
		$data .= '			\'enemies\' => array('."\n";
		$data .= '				array(\'name\' => \'Bald Bull\'),'."\n";
		$data .= '			)'."\n";
		$data .= '		)'."\n";
		$data .= '	);'."\n";
		$data .= '}'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/sections_nested');
	}

}
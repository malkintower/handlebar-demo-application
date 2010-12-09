<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_GrandParentContext extends View_Examples_Template
{
	public $example_title = 'Grand Parent Context Example';

	public $grand_parent_id = 'grand_parent1';

	public $parent_contexts = array();

	public function before()
	{
		parent::before();

		$this->parent_contexts[] = array('parent_id' => 'parent1', 'child_contexts' => array(
						array('child_id' => 'parent1-child1'),
						array('child_id' => 'parent1-child2')
			));

		$parent2 = new stdClass();
		$parent2->parent_id = 'parent2';
		$parent2->child_contexts = array(
				array('child_id' => 'parent2-child1'),
				array('child_id' => 'parent2-child2')
		);

		$this->parent_contexts[] = $parent2;
	}

	function page_title()
	{
		return $this->page_title.$this->example_title;
	}

	function template()
	{
		return parent::get_template('examples/grand_parent_context');
	}

	function php_class()
	{
		$data = 'public $grand_parent_id = \'grand_parent1\';'."\n\n";
		$data .= 'public $parent_contexts = array();'."\n\n";
		$data .= 'public function before()'."\n";
		$data .= '{'."\n";
		$data .= '	parent::before();'."\n";
		$data .= "\n";
		$data .= '	$this->parent_contexts[] = array(\'parent_id\' => \'parent1\', \'child_contexts\' => array('."\n";
		$data .= '		array(\'child_id\' => \'parent1-child1\'),'."\n";
		$data .= '		array(\'child_id\' => \'parent1-child2\')'."\n";
		$data .= '	));'."\n";
		$data .= "\n";
		$data .= '	$parent2 = new stdClass();'."\n";
		$data .= '	$parent2->parent_id = \'parent2\';'."\n";
		$data .= '	$parent2->child_contexts = array('."\n";
		$data .= '		array(\'child_id\' => \'parent2-child1\'),'."\n";
		$data .= '		array(\'child_id\' => \'parent2-child2\')'."\n";
		$data .= '	);'."\n";
		$data .= "\n";
		$data .= '	$this->parent_contexts[] = $parent2;'."\n";
		$data .= '}'."\n";

		return parent::format_class($data);
	}

	function output()
	{
		return parent::get_output('examples/grand_parent_context');
	}

}
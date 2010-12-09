<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Tutorials_Index extends View_Template
{
	function before()
	{
		parent::before();
		$this->insert_template('tutorials/index', 'content');
	}

	function page_title()
	{
		return $this->page_title .= 'Tutorials Index';
	}
}
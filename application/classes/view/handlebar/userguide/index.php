<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Handlebar_Userguide_Index extends View_Template
{
	function before()
	{
		parent::before();
		
		$this->insert_template('handlebar/userguide/index', 'content');
	}

	function page_title()
	{
		return 'Tutorials Index';
	}

}
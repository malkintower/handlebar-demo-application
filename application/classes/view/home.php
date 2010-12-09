<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Home extends View_Template
{
	function before()
	{
		parent::before();
		$this->insert_template('home', 'content');
	}

	function page_title()
	{
		return $this->page_title.'Home';
	}

}
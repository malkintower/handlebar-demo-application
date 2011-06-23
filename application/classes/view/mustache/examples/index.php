<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Mustache_Examples_Index extends View_Template
{
	function before()
	{
		parent::before();
		$this->insert_template('mustache/examples/index', 'content');
	}

	function page_title()
	{
		return 'Mustache Examples | '.$this->page_title;
	}
}
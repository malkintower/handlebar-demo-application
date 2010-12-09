<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_HelloWorld extends View_Template
{
	function before()
	{
		parent::before();
		$this->insert_template('default', 'content');
	}

	function page_title()
	{
		return $this->page_title.'Hello World Example';
	}

	function content()
	{
		return 'Hello World!';
	}

}
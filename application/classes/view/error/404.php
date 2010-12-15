<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Error_404 extends View_Template
{

	function before()
	{
		parent::before();

		$this->page_title = '404 Page Not Found';

		$this->insert_template('error/404', 'content');
	}

	function page()
	{
		return $this->page;
	}

}
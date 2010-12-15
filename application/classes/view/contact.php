<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Contact extends View_Template
{

	function before()
	{
		parent::before();

		if (isset($this->contact))
		{
			$this->insert_template('contact/form', 'content');
		}
		else
		{
			$this->insert_template('contact/success', 'content');
		}
	}

	function page_title()
	{
		return $this->page_title.'Contact';
	}

	function post()
	{
		return $this->contact;
	}

	function error()
	{
		return $this->errors;
	}

}
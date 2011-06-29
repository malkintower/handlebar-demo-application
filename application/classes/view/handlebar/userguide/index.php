<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Handlebar_Userguide_Index extends View_Template
{
	function before()
	{
		parent::before();

		$this->insert_template('handlebar/userguide/index', 'content');
	}

	function meta_description()
	{
		return 'List of tutorials using the handlebar mustache kohana module';
	}

	function meta_keywords()
	{
		return 'kohana, handlebar, mustache, html, markup, view, template, tutorials';
	}

	function page_title()
	{
		return 'Handlebar User Guide | '.$this->page_title;
	}

}
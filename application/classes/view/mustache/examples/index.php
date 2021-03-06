<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Mustache_Examples_Index extends View_Template
{
	function before()
	{
		parent::before();
		
		$this->insert_template('mustache/examples/index', 'content');
	}

	function meta_description()
	{
		return 'List of examples using mustache templating';
	}

	function meta_keywords()
	{
		return 'kohana, mustache, html, markup, view, template, examples';
	}

	function page_title()
	{
		return 'Mustache Examples | '.$this->page_title;
	}
}
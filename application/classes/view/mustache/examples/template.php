<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Mustache_Examples_Template extends View_Template
{
	function before()
	{
		parent::before();

		$this->insert_template('mustache/examples/template', 'content');

		$styles = array(
			array('href' => '/guide/media/css/shCore.css'),
			array('href' => '/guide/media/css/shThemeKodoc.css'),
		);

		$this->add_styles($styles);

		$scripts = array(
			array('src' => '/guide/media/js/jquery.min.js'),
			array('src' => '/guide/media/js/jquery.cookie.js'),
			array('src' => '/guide/media/js/shCore.js'),
			array('src' => '/guide/media/js/shBrushPhp.js'),
			array('src' => '/guide/media/js/kodoc.js')
		);

		$this->add_scripts($scripts);
	}

	function page_title()
	{
		return $this->example_title.' | '.$this->page_title;
	}

	function template()
	{
		$path = Kohana::find_file($this->example_path, $this->template_name, 'mustache');
		return file_get_contents($path);
	}

	function php_class()
	{
		$path = Kohana::find_file($this->example_path, $this->class_name);
		return file_get_contents($path);
	}

	function output()
	{
		// get the example template
		$path = Kohana::find_file($this->example_path, $this->template_name, 'mustache');
		$template = file_get_contents($path);

		// include and initialise the example class
		require Kohana::find_file($this->example_path, $this->class_name);
		$mustache = new $this->class_name();
		
		return $mustache->render($template);
	}

}
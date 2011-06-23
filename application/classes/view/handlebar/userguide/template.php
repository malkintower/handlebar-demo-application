<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Handlebar_Userguide_Template extends View_Template {

	function before()
	{
		parent::before();

		$this->insert_template('handlebar/userguide/template', 'content');
		
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
		return $this->tutorial_title.' Tutorial';
	}

	function markdown()
	{
		return $this->markdown;
	}

}
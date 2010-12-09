<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Template extends Handlebar
{

	protected $page_title = 'Handlebar Mustache » ';
	protected $styles;
	protected $content = 'default content';
	protected $selected;

	function before()
	{
		$this->insert_template('template');
		$this->insert_template('navigation', 'navigation');

		$this->styles = array(
				array('href' => CSS_PATH.'reset.css', 'media' => 'screen'),
				array('href' => CSS_PATH.'layout.css', 'media' => 'screen')
		);

		$request = Request::current();

		$this->selected = $request->action === 'index' ? $request->controller : '';
	}

	function navigation()
	{
		$nav = array(
				array(
						'name' => 'Home',
						'href' => '/home'
				),
				array(
						'name' => 'Hello World',
						'href' => '/helloworld'
				),
				array(
						'name' => 'Contact',
						'href' => '/contact'
				),
				array(
						'name' => 'Mustache Examples',
						'href' => '/examples'
				),
				array(
						'name' => 'Handlebar Tutorials',
						'href' => '/tutorials'
				)
		);

		foreach ($nav as &$item)
		{
			if (strtolower($item['name']) == strtolower($this->selected))
			{
				unset($item['href']);
				break;
			}
		}

		return $nav;
	}

	function styles()
	{
		return $this->styles;
	}

	function content()
	{
		return $this->content;
	}

}

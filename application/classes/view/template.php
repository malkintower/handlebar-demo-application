<?php

defined('SYSPATH') OR die('No direct access allowed.');

class View_Template extends Handlebar
{

	protected $page_title = 'Handlebar Mustache » ';
	protected $styles;
	protected $content = 'default content';

	function before()
	{
		$this->insert_template('template');
		$this->insert_template('navigation', 'navigation');

		$this->styles = array(
				array('href' => CSS_PATH.'reset.css', 'media' => 'screen'),
				array('href' => CSS_PATH.'layout.css', 'media' => 'screen')
		);
	}

	function navigation()
	{
		$nav = array(
				array(
						'name' => 'Home',
						'href' => Url::base().'home'
				),
				array(
						'name' => 'Hello World',
						'href' => Url::base().'helloworld'
				),
				array(
						'name' => 'Contact',
						'href' => Url::base().'contact'
				),
				array(
						'name' => 'Mustache Examples',
						'href' => Url::base().'examples'
				),
				array(
						'name' => 'Handlebar Tutorials',
						'href' => Url::base().'tutorials'
				)
		);

		if (isset($this->selected))
		{
			foreach ($nav as &$item)
			{
				$href = explode('/', strtolower($item['href']));
				$href = array_pop($href);

				if ($href == strtolower($this->selected))
				{
					unset($item['href']);
					break;
				}
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

	function base_url()
	{
		return Url::base();
	}

}

<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Template extends Handlebar {

	protected $page_title = 'Handlebar Mustache Demo';
	protected $meta_description = 'Handlebar Mustache Example Application';
	protected $meta_keywords = 'handlebar, mustache, kohana, application, template';
	protected $styles = array();
	protected $scripts = array();
	protected $nav = array(
		array(
			'name' => 'Mustache Examples',
			'href' => array(
				'directory' => 'mustache',
				'controller' => 'examples'
			),
			'home' => TRUE
		),
		array(
			'name' => 'Handlebar User Guide',
			'href' => array(
				'directory' => 'handlebar',
				'controller' => 'userguide'
			)
		)
	);
	protected $content = 'default content';

	protected function add_styles(array $styles)
	{
		// is this an array of arrays
		if ( ! Arr::is_assoc($styles))
		{
			foreach ($styles as $value)
			{
				// recursion
				$this->add_styles($value);
			}
		}
		elseif (isset($styles['href']))
		{
			$s = $styles;

			if ( ! isset($s['media']))
			{
				$s['media'] = 'screen';
			}

			$this->styles = array_merge($this->styles, array($s));
		}
	}

	protected function add_scripts(array $scripts)
	{
		// is this an array of arrays
		if ( ! Arr::is_assoc($scripts))
		{
			foreach ($scripts as $value)
			{
				// recursion
				$this->add_scripts($value);
			}
		}
		elseif (isset($scripts['src']))
		{
			$this->scripts = array_merge($this->scripts, array(array('src' => $scripts['src'])));
		}
	}

	function before()
	{
		$this->insert_template('template');

		$styles = array(
			array('href' => CSS_PATH.'reset.css'),
			array('href' => CSS_PATH.'layout.css')
		);

		$this->add_styles($styles);
	}

	function navigation()
	{
		$request = Request::current();

		$request_controller = strtolower($request->controller());

		$request_action = strtolower($request->action());

		$nav = $this->nav;

		foreach ($nav as &$item)
		{
			if ($item['href']['controller'] == $request_controller AND $request_action === 'index')
			{
				unset($item['href']);
			}
			else
			{
				$item['href'] = '/'.implode('/', $item['href']);
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

	function is_home_page()
	{
		$request = Request::current();

		$request_controller = strtolower($request->controller());

		$home = FALSE;

		$nav = $this->nav;

		foreach ($nav as &$item)
		{
			if (isset($item['home']) AND ($item['href']['controller'] == $request_controller OR empty($request_controller)))
			{
				$home = TRUE;
				break;
			}
		}

		return $home;
	}

}

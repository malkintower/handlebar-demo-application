<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Handlebar_Userguide extends Controller_Handlebar {

	public function before()
	{
		parent::before();

		define('MARKDOWN_PARSER_CLASS', 'Kodoc_Markdown');

		if ( ! class_exists('Markdown', FALSE))
		{
			require Kohana::find_file('vendor', 'markdown/markdown');
		}
	}

	public function action_index()
	{
		$this->view = Handlebar::factory('handlebar/userguide/index');
	}

	public function action_about()
	{
		$tutorial_title = 'About';

		$markdown = $this->get_markdown_file('guide/handlebar', 'index');

		$this->view = Handlebar::factory('handlebar/userguide/template')
				->bind('tutorial_title', $tutorial_title)
				->bind('markdown', $markdown);
	}

	public function action_installation()
	{
		$tutorial_title = 'Installation';

		$markdown = $this->get_markdown_file('guide/handlebar', 'installation');

		$this->view = Handlebar::factory('handlebar/userguide/template')
				->bind('tutorial_title', $tutorial_title)
				->bind('markdown', $markdown);
	}

	public function action_hello()
	{
		$tutorial_title = 'Hello World';

		$markdown = $this->get_markdown_file('guide/handlebar/tutorials', 'hello');

		$this->view = Handlebar::factory('handlebar/userguide/template')
				->bind('tutorial_title', $tutorial_title)
				->bind('markdown', $markdown);
	}

	public function action_template()
	{
		$tutorial_title = 'Template';

		$markdown = $this->get_markdown_file('guide/handlebar/tutorials', 'template');

		$this->view = Handlebar::factory('handlebar/userguide/template')
				->bind('tutorial_title', $tutorial_title)
				->bind('markdown', $markdown);
	}

	private function get_markdown_file($path, $name)
	{
		if ($file_path = Kohana::find_file($path, $name, 'md'))
		{
			Kodoc_Markdown::$show_toc = true;
			$markdown = Markdown(file_get_contents($file_path));

			return $markdown;
		}
		else
		{
			throw new Kohana_Exception('Could not find the markdown file \':path/:name.md\'',
					array(':path' => $path, ':name' => $name));
		}
	}

}

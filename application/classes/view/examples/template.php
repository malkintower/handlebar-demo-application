<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Examples_Template extends View_Template
{
	function before()
	{
		parent::before();
		$this->insert_template('examples/template', 'content');
	}

	function get_template($name)
	{
		$path = Kohana::find_file('views', $name, 'mustache');
		return htmlentities(file_get_contents($path), ENT_COMPAT, $this->_charset);
	}

	function format_class($data)
	{
		$data = '<?php'."\n\n".$data."\n".'?>';

		return highlight_string($data, TRUE);
	}

	function get_output($name, $view = NULL, $partials = NULL, $tidy = FALSE)
	{
		// In order to show the output escaped we need
		// to render the example template before the base template
		$path = Kohana::find_file('views', $name, 'mustache');

		if ($view === NULL)
			$view = $this;

		$example = new Mustache(file_get_contents($path), $view, $partials);

		$rendered = $example->render();

		if ($tidy)
		{
			$config = array(
					'indent' => true,
					'output-xhtml' => true,
					'show-body-only' => true,
					'preserve-entities' => true,
					'wrap' => 0);

			$tidy = new tidy();
			$tidy->parseString($rendered, $config, 'utf8');

			$rendered = $tidy->value;
		}

		return $rendered;
	}

}
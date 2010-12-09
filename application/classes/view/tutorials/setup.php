<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Tutorials_Setup extends View_Template {

	function before()
	{
		parent::before();
		$this->insert_template('tutorials/setup', 'content');
	}

	function page_title()
	{
		return $this->page_title .= 'Setup Tutorial';
	}

	function bootstrap()
	{
		$data = '<?php'."\n\n";
		$data .= '/**'."\n";
		$data .= ' * Enable modules. Modules are referenced by a relative or absolute path.'."\n";
		$data .= ' */'."\n";
		$data .= 'Kohana::modules(array('."\n";
		$data .= '		// \'auth\'       => MODPATH.\'auth\',       // Basic authentication'."\n";
		$data .= '		// \'cache\'      => MODPATH.\'cache\',      // Caching with multiple backends'."\n";
		$data .= '		// \'codebench\'  => MODPATH.\'codebench\',  // Benchmarking tool'."\n";
		$data .= '		// \'database\'   => MODPATH.\'database\',   // Database access'."\n";
		$data .= '		// \'image\'      => MODPATH.\'image\',      // Image manipulation'."\n";
		$data .= '		// \'orm\'        => MODPATH.\'orm\',        // Object Relationship Mapping'."\n";
		$data .= '		// \'oauth\'      => MODPATH.\'oauth\',      // OAuth authentication'."\n";
		$data .= '		// \'pagination\' => MODPATH.\'pagination\', // Paging of results'."\n";
		$data .= '		// \'unittest\'   => MODPATH.\'unittest\',   // Unit testing'."\n";
		$data .= '		// \'userguide\'  => MODPATH.\'userguide\',  // User guide and API documentation'."\n";
		$data .= '		\'handlebar\' => MODPATH.\'handlebar\''."\n";
		$data .= '	));'."\n\n".'?>';

		return highlight_string($data, TRUE);
	}

}
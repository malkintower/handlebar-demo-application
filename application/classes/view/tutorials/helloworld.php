<?php defined('SYSPATH') OR die('No direct access allowed.');

class View_Tutorials_HelloWorld extends View_Template {

	function before()
	{
		parent::before();
		$this->insert_template('tutorials/hello_world', 'content');
	}

	function page_title()
	{
		return $this->page_title .= 'Hello World Tutorial';
	}

	function controller()
	{
		$data = '<?php defined(\'SYSPATH\') OR die(\'No direct access allowed.\');'."\n\n";
		$data .= 'class Controller_Home extends Controller_Handlebar'."\n";
		$data .= '{'."\n";
		$data .= '	public function action_index()'."\n";
		$data .= '	{'."\n";
		$data .= '		$this->view = Handlebar::factory(\'Home\');'."\n";
		$data .= '	}'."\n";
		$data .= '}'."\n\n".'?>';

		return highlight_string($data, TRUE);
	}

	function view()
	{
		$data = '<?php defined(\'SYSPATH\') OR die(\'No direct access allowed.\');'."\n\n";
		$data .= 'class View_Home extends Handlebar'."\n";
		$data .= '{'."\n";
		$data .= '	function before()'."\n";
		$data .= '	{'."\n";
		$data .= '		$this->insert_template(\'home\');'."\n";
		$data .= '	}'."\n";
		$data .= "\n";
		$data .= '	function content()'."\n";
		$data .= '	{'."\n";
		$data .= '		return \'Hello World!\';'."\n";
		$data .= '	}'."\n";
		$data .= '}'."\n\n".'?>';

		return highlight_string($data, TRUE);
	}

}
<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_HelloWorld extends Controller_Template
{

	public function action_index()
	{
		$this->view = Handlebar::factory('helloworld')
			->bind('selected', $this->selected);
	}

}

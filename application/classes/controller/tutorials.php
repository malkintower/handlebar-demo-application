<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Tutorials extends Controller_Handlebar
{

	public function action_index()
	{
		$this->view = Handlebar::factory('tutorials/index');
	}

	public function action_setup()
	{
		$this->view = Handlebar::factory('tutorials/setup');
	}

	public function action_hello_world()
	{
		$this->view = Handlebar::factory('tutorials/helloworld');
	}

}

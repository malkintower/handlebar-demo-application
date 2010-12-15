<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Home extends Controller_Template
{

	public function action_index()
	{
		$this->view = Handlebar::factory('Home')
			->bind('selected', $this->selected);
	}

}

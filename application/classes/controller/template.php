<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Controller_Handlebar
{
	public $selected;

	public function before()
	{
		parent::before();

		$request = Request::current();

		$this->selected = $request->action === 'index' ? strtolower($request->controller) : '';
	}

	public function after()
	{
		parent::after();
	}

}

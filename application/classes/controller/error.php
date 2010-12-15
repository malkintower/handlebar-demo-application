<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Error extends Controller_Template
{

	public function action_404($id)
	{
		$request = Request::current();

		// Grab the Main Request URI
		//$page = $request->param('id', $request->uri());

		// Set the Request's Status to 404 (Page Not Found)
		$request->status = 404;

		$this->view = Handlebar::factory('error/404')
			->bind('page', $id);
	}

}

<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Error extends Controller_Handlebar
{
	public $page = NULL;
	public $message = NULL;

	public function before()
	{
		parent::before();

		$this->page = URL::site(rawurldecode(Request::$initial->uri()));

		// Internal request only!
		if (Request::$initial !== Request::$current)
		{
			if ($message = rawurldecode($this->request->param('message')))
			{
				$this->message = $message;
			}
		}
		else
		{
			$this->request->action(404);
		}

		$this->response->status((int) $this->request->action());
	}

	public function action_404()
	{
		$this->title = '404 Not Found';

		// Here we check to see if a 404 came from our website. This allows the
		// webmaster to find broken links and update them in a shorter amount of time.
		if (isset($_SERVER['HTTP_REFERER']) AND strstr($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) !== FALSE)
		{
			// Set a local flag so we can display different messages in our template.
			$this->local = TRUE;
		}

		// HTTP Status code.
		$this->response->status(404);

		$this->view = Handlebar::factory('error/404')
			->bind('page', $this->page)
			->bind('message', $this->message);
	}

}
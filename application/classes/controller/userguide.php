<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Kohana user guide and api browser.
 *
 * @package    Kohana/Userguide
 * @category   Controllers
 * @author     Kohana Team
 */
class Controller_Userguide extends Controller_Template {

	//public $template = 'userguide/template';

	// Routes
	//protected $media;
	//protected $api;
	//protected $guide;

	public function before()
	{
		if ($this->request->action() === 'media')
		{
			// Do not template media files
			$this->auto_render = FALSE;
		}
	}

	public function action_docs()
	{
		throw new HTTP_Exception_404('guide/docs has been disabled');
	}

	// guide/api disabled in config/userguide.php

	public function action_media()
	{
		// Get the file path from the request
		$file = $this->request->param('file');

		// Find the file extension
		$ext = pathinfo($file, PATHINFO_EXTENSION);

		// Remove the extension from the filename
		$file = substr($file, 0, -(strlen($ext) + 1));

		if ($file = Kohana::find_file('media/guide', $file, $ext))
		{
			// Check if the browser sent an "if-none-match: <etag>" header, and tell if the file hasn't changed
			$this->response->check_cache(sha1($this->request->uri()).filemtime($file), $this->request);

			// Send the file content as the response
			$this->response->body(file_get_contents($file));

			// Set the proper headers to allow caching
			$this->response->headers('content-type',  File::mime_by_ext($ext));
			$this->response->headers('last-modified', date('r', filemtime($file)));
		}
		else
		{
			// Return a 404 status
			$this->response->status(404);
		}
	}

	public function after()
	{
	}

} // End Userguide
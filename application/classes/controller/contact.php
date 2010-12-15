<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Contact extends Controller_Template
{

	public function action_index()
	{
		$contact = array(
				'cname' => NULL,
				'cmail' => NULL,
				'cmess' => NULL
		);

		$post = Validate::factory($_POST)
				->filter(TRUE, 'trim')
				->rule('cname', 'not_empty')
				->rule('cmail', 'not_empty')
				->rule('cmail', 'email')
				->rule('cmess', 'not_empty')
				->rule('cmess', 'max_length', array(10000));

		if ($post->check())
		{
			// send email
			$to = 'youremailaddress@yourdomain.co.uk';

			$subject = 'Contact form from Kohana Handlebar Mustache';

			$contact = array_merge($contact, $post->as_array());

			$message = 'Contact name: '.$contact['cname']."\n".'Contact e-mail: '.$contact['cmail']."\n".'Contact message: '.$contact['cmess']."\n";

			$headers = 'From: donotreply@yourdomain.co.uk'."\r\n".
				'Reply-To: donotreply@yourdomain.co.uk'."\r\n".
				'X-Mailer: PHP/'.phpversion();

			// The mail function will probably fail if running as localhost
			//mail($to, $subject, $message, $headers);

			// use success view
			Request::instance()->redirect('contact/success');
		}
		else
		{
			$errors = $post->errors('contact');

			$contact = array_merge($contact, $post->as_array());
		}

		$this->view = Handlebar::factory('Contact')
				->bind('contact', $contact)
				->bind('errors', $errors)
				->bind('selected', $this->selected);
	}

	public function action_success()
	{
		$this->view = Handlebar::factory('Contact');
	}

}

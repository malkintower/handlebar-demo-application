<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
		(
		'cname' => array(
				'not_empty' => 'The name field must be completed'
		),
		'cmail' => array(
				'not_empty' => 'The email field must be completed',
				'email' => 'The email address is invalid',
		),
		'cmess' => array(
				'not_empty' => 'The message field must be completed',
				'max_length' => 'The message must be ten thousand characters or less',
		)
);
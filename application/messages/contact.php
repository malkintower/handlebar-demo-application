<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
	(
	'name' => array(
		'not_empty' => 'The name field must be completed',
		'max_length' => 'The name must be fifty characters or less',
		'Valid::alpha_space' => 'Only letters, numbers, spaces, dashes and underscores allowed',
	),
	'email' => array(
		'not_empty' => 'The email field must be completed',
		'email' => 'The email address is invalid',
	),
	'message' => array(
		'not_empty' => 'The message field must be completed',
		'max_length' => 'The message must be three thousand characters or less',
	)
);
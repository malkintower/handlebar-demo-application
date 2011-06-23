<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Additional Validation rules.
 *
 * @category   Security
 * @author     Phil Paxton
 */
class Valid extends Kohana_Valid {

	/**
	 * Checks whether a string consists of alphanumeric characters, spaces, underscores and dashes only.
	 *
	 * @param   string   input string
	 * @param   boolean  trigger UTF-8 compatibility
	 * @return  boolean
	 */
	public static function alpha_space($str, $utf8 = FALSE)
	{
		if ($utf8 === TRUE)
		{
			$regex = '/^[-\pL\pN_ ]++$/uD';
		}
		else
		{
			$regex = '/^[-a-z0-9_ ]++$/iD';
		}

		return (bool) preg_match($regex, $str);
	}

} // End Valid

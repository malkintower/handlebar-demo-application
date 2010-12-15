<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Define Constants
 */
define('CSS_PATH', '/static/css/');

/**
 * Set the production status by the domain.
 */
define('IN_PRODUCTION', $_SERVER['SERVER_ADDR'] !== '127.0.0.1');

//-- Environment setup --------------------------------------------------------

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Europe/London');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_GB.utf8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

//-- Configuration and initialization -----------------------------------------

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
			'base_url' => '/',
			'index_file' => FALSE,
			'errors' => ! IN_PRODUCTION
	));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Kohana_Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Kohana_Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
			// 'auth'       => MODPATH.'auth',       // Basic authentication
			// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
			// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
			// 'database'   => MODPATH.'database',   // Database access
			// 'image'      => MODPATH.'image',      // Image manipulation
			// 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
			// 'oauth'      => MODPATH.'oauth',      // OAuth authentication
			// 'pagination' => MODPATH.'pagination', // Paging of results
			// 'unittest'   => MODPATH.'unittest',   // Unit testing
			// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
			'handlebar' => MODPATH.'handlebar'
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('error', 'error(/<action>(/<id>))', array('id' => '.+'))
	->defaults(array(
			'controller' => 'error',
			'action' => '404',
			'id' => NULL,
	));


Route::set('default', '(<controller>(/<action>))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));


/**
 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
 * If no source is specified, the URI will be automatically detected.
 */
try
{
	$request = Request::instance();
}
catch (Kohana_Request_Exception $e)
{
	if ( ! IN_PRODUCTION)
	{
		// Just re-throw the exception
		throw $e;
	}

	// Log the error - usually missing controller
	Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));

	// Could not match a route so point to a 404
	$request = Request::factory('error/404'.$_SERVER['PATH_INFO']);
}

try
{
	// Attempt to execute the response
	$request->execute();
}
catch (Exception $e)
{
	if ( ! IN_PRODUCTION)
	{
		// Just re-throw the exception
		throw $e;
	}

	// Log the error - usually missing action
	Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));

	// Send to internal error route
	$request = Request::factory('error/404'.$_SERVER['PATH_INFO'])->execute();
}

/**
 * Display the request response.
 */
echo $request->send_headers()->response;
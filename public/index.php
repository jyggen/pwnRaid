<?php
define('DOCROOT', __DIR__.DIRECTORY_SEPARATOR);
define('APPPATH', realpath(__DIR__.'/../pwnraid/core/').DIRECTORY_SEPARATOR);
define('PKGPATH', realpath(__DIR__.'/../pwnraid/packages/').DIRECTORY_SEPARATOR);
define('COREPATH', realpath(__DIR__.'/../pwnraid/fuel/').DIRECTORY_SEPARATOR);

defined('FUEL_START_TIME') or define('FUEL_START_TIME', microtime(true));
defined('FUEL_START_MEM') or define('FUEL_START_MEM', memory_get_usage());

require APPPATH.'bootstrap.php';

try {

	$response = Request::forge()->execute()->response();

} catch (HttpNotFoundException $e) {

	$route = array_key_exists('_404_', Router::$routes) ? Router::$routes['_404_']->translation : Config::get('routes._404_');

	if ($route) {

		$response = Request::forge($route)->execute()->response();

	} else {

		throw $e;

	}

}

$bm = Profiler::app_total();
$response->body(str_replace(array('{exec_time}', '{mem_usage}'),array(round($bm[0], 4), round($bm[1] / pow(1024, 2), 3)), $response->body()));
$response->send(true);
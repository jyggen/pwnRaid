<?php
require COREPATH.'classes'.DIRECTORY_SEPARATOR.'autoloader.php';
class_alias('Fuel\\Core\\Autoloader', 'Autoloader');

require COREPATH.'bootstrap.php';

Autoloader::add_classes(array(
	'ViewModel' => APPPATH.'classes/viewmodel.php',
));
Autoloader::register();

Fuel::$env = (isset($_SERVER['FUEL_ENV']) ? $_SERVER['FUEL_ENV'] : Fuel::PRODUCTION);
Fuel::init('config.php');
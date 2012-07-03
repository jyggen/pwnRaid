<?php
require COREPATH.'classes'.DIRECTORY_SEPARATOR.'autoloader.php';
class_alias('Fuel\\Core\\Autoloader', 'Autoloader');

require COREPATH.'bootstrap.php';

Autoloader::add_classes(array(
	'Config_File' => APPPATH.'classes/config/file.php', // We want it to fallback on USRPATH and not APPPATH (line 43).
	'Finder'      => APPPATH.'classes/finder.php',      // We want it to include USRPATH as a base path (line 9).
	'ViewModel'   => APPPATH.'classes/viewmodel.php',   // We want to append .twig to the auto-detected view (line 9 and 16).
));
Autoloader::register();

Fuel::$env = (isset($_SERVER['FUEL_ENV']) ? $_SERVER['FUEL_ENV'] : Fuel::PRODUCTION);
Fuel::init('config.php');
<?php
Autoloader::add_core_namespace('pwnRaid');

Autoloader::add_classes(array(
	// Controllers
	'pwnRaid\\Controller_Base'  => __DIR__.'/classes/controller/base.php',
	'pwnRaid\\Controller_Home'  => __DIR__.'/classes/controller/home.php',
	'pwnRaid\\Controller_Setup' => __DIR__.'/classes/controller/setup.php',
	// Models
	'pwnRaid\\Model_Progress' => __DIR__.'/classes/model/progress.php',
	// ViewModels
	'pwnRaid\\View_Base'        => __DIR__.'/classes/view/base.php',
	'pwnRaid\\View_Home_404'    => __DIR__.'/classes/view/home/404.php',
	'pwnRaid\\View_Home_index'  => __DIR__.'/classes/view/home/index.php',
	'pwnRaid\\View_Setup_index' => __DIR__.'/classes/view/setup/index.php',
));
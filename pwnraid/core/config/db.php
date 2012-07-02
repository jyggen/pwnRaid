<?php
return array(
	'active'  => 'default',
	'default' => array(
		'type'       => 'pdo',
		'connection' => array(
			'dsn'        => null,
			'username'   => null,
			'password'   => null,
			'persistent' => true,
		),
		'identifier'   => '`',
		'table_prefix' => null,
		'charset'      => 'utf8',
		'enable_cache' => true,
		'profiling'    => false,
	),
);
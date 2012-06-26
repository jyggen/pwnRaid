<?php
return array(
	'name'          => 'pwnRaid',
	'combine_mode'  => 'type',
	'compress_mode' => 'minify',
	'assets'        => array(
		'css' => array(
			'groups' => array(
				'standard' => array(
					'base.less',
					'pwnraid.less',
					'helper.less',
				),
			),
			'ext' => 'css',
		),
		'js'  => array(
			'groups' => array(
				'libs' => array(
					'jquery.js',
					'handlebars.runtime.js',
				),
				'plugins' => array(
					'jquery.autocomplete.js',
					'jquery.simplemodal.js',
				),
				'script' => array(
					'pwnraid.js',
					'handler.js',
					'module.js',
					'loader.js',
				),
			),
			'lint' => array('script'),
		),
		'tpl' => array(
			'groups' => array(
				'help' => array(
					'dsn.handlebars',
				),
			),
			'ext'  => 'js',
			'args' => '-k if',
		),
	),
);
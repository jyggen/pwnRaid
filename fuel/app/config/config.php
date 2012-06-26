<?php
return array(
	'base_url'          => null,
	'url_suffix'        => '',
	'index_file'        => false,
	'profiling'         => false,
	'cache_dir'         => APPPATH.'cache/',
	'caching'           => false,
	'cache_lifetime'    => 3600,
	'ob_callback'       => null,
	'errors'            => array(
						    'continue_on' => array(E_NOTICE, E_WARNING, E_DEPRECATED, E_STRICT),
						    'throttle'    => 10,
						    'notices'     => true,
						   ),
	'language'          => 'en',
	'language_fallback' => 'en',
	'locale'            => 'en_US',
	'encoding'          => 'UTF-8',
	'server_gmt_offset' => 0,
	'default_timezone'  => 'UTC',
	'log_threshold'     => Fuel::L_WARNING,
	'log_path'          => APPPATH.'logs/',
	'log_date_format'   => 'Y-m-d H:i:s',
	'security'          => array(
							'csrf_autoload'       => true,
							'csrf_token_key'      => 'fuel_csrf_token',
							'csrf_expiration'     => 0,
							'uri_filter'          => array('htmlentities'),
							'input_filter'        => array(),
							'output_filter'       => array('Security::htmlentities'),
							'auto_filter_output'  => true,
							'whitelisted_classes' => array('Fuel\\Core\\Response', 'Fuel\\Core\\View', 'Fuel\\Core\\ViewModel', 'Closure'),
						   ),
	'cookie'            => array(
							'expiration' => 0,
							'path'       => '/',
							'domain'     => null,
							'secure'     => false,
							'http_only'  => false,
						   ),
	'validation'        => array('global_input_fallback' => true),
	'routing'			=> array('case_sensitive' => true),
	'module_paths'      => array(),
	'always_load'       => array(
							'packages' => array('buildr', 'parser'),
							'modules'  => array(),
							'classes'  => array(),
							'config'   => array(),
							'language' => array(),
						   ),
);
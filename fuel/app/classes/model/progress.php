<?php
class Model_Progress {

	protected $url_format = 'http://www.wowprogress.com/guild/%s/%s/%s/json_rank';

	public static function fetch() {

		$guild  = Config::get('pwnraid.guild');
		$realm  = Config::get('pwnraid.realm');
		$region = Config::get('pwnraid.region');

	}

}
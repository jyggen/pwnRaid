<?php
class Model_Realm {

	public static function get_regions() {

		$realms     = static::load_realms();
		$regions    = array();
		$longnames  = array('Americas', 'Europe', 'China', 'Korea', 'Taiwan');
		$shortnames = array('US', 'EU', 'CH', 'KR', 'TW');

		foreach($realms as $region => $data) {

			$regions[$region] = str_replace($shortnames, $longnames, $region);

		}

		asort($regions);

		return $regions;

	}

	protected static function load_realms() {

		return Config::load('realms');

	}

}
<?php
namespace Fuel\Tasks;

class Realms {

	public static function run() {

		$request    = \Request::forge('http://www.wowpedia.org/index.php?title=Realms_list&printable=yes', array('driver' => 'curl'));
		$response   = $request->execute()->response();
		$realm_list = array();
		$regions    = explode('<h2>', $response);
		$longnames  = array('Europe', 'China', 'Korea', 'Taiwan');
		$shortnames = array('EU', 'CH', 'KR', 'TW');

		unset($regions[0]);
		unset($regions[1]);

		foreach($regions as $region_data) {

			preg_match('/id="Servers_in_(the_)?([A-Za-z]*)"/', $region_data, $match);

			$region              = str_replace($longnames, $shortnames, $match[2]);
			$realm_list[$region] = array();

			preg_match_all('/href="([^"]*)Server:([^"]*)"([^>]*)>(.*)<\/a>/', $region_data, $matches);

			foreach($matches[4] as $realm) {

				if(preg_match('/ \(/', $realm)) {

					list($realm, $alt)     = explode(' (', $realm);
					$alt                   = mb_substr($alt, 0, -1, 'UTF-8');
					$realm_list[$region][] = trim(strip_tags($realm));
					$realm_list[$region][] = trim(strip_tags($alt));

				} elseif(preg_match('/\(/', $realm)) {

					list($realm, $junk)    = explode('(', $realm);
					$realm_list[$region][] = trim(strip_tags($realm));

				} else {

					$realm_list[$region][] = trim(strip_tags($realm));

				}

			}

		}

		\Config::save(APPPATH.'config'.DS.'realms', $realm_list);

	}

}


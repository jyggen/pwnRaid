<?php
class Controller_Realms extends Controller_Base {

	public function get_list($region=null) {

		$region = strtoupper($region);
		$value  = Input::get('value', false);
		$realms = Config::load('realms');

		if($region == null) {

			throw new HttpNotFoundException;

		} elseif(!$value) {

			return $this->response(array(''));

		} elseif(!$realms) {

			throw new HttpServerErrorException;

		} elseif(array_key_exists($region, $realms)) {

			$found = array();
			foreach($realms[$region] as $realm) {
				if (mb_strpos($realm, $value, 0, 'UTF-8') === 0){
					$found[]['value'] = $realm;
				}
				if (count($found) >= 10) {
					break;
				}
			}

			return $this->response($found);

		} else {

			return $this->response('FUCK');

		}

	}

}
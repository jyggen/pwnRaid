<?php
class Controller_Realms extends Controller_Base {

	public function get_list() {

		if(!$realms = Config::load('realms')) {
			throw new \HttpServerErrorException;;
		}

		return $this->response($realms);

	}

}
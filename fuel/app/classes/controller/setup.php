<?php
class Controller_Setup extends Controller_Base {

	public function action_index() {

		return Response::forge(ViewModel::forge('setup/index'));

	}

	public function action_realms($id='eu') {

		if(!Config::load('realms.json')) {

			throw new HttpServerErrorException;;

		}
		$realms = Config::get('realms');

		Debug::dump($realms);
		die;

		if($realms == null) {

			die('aaaaw');

		} else {

			return $this->response($realms);

		}

	}

}
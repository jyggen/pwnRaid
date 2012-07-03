<?php
class Controller_Setup extends Controller_Base {

	public function action_index() {

		return Response::forge(ViewModel::forge('setup/index'));

	}

}
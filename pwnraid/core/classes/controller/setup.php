<?php
class Controller_Setup extends Controller_Base {

	public function action_index() {

		$view    = ViewModel::forge('setup/index');
		$regions = Model_Realm::get_regions();

		$view->set('regions', $regions);

		return Response::forge($view);

	}

}
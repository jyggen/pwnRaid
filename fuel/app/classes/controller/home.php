<?php
class Controller_Home extends Controller_Base {

	public function action_index() {

		return Response::forge(ViewModel::forge('home/index'));

	}

	public function action_404() {

		return Response::forge(ViewModel::forge('home/404'), 404);

	}

}
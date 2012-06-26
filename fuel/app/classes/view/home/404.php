<?php
class View_Home_404 extends View_Base {

	protected $_view = 'home/404.twig';

	public function view() {

		$messages    = array('Aw, crap!', 'Bloody Hell!', 'Uh Oh!', 'Huh?');
		$this->title = $messages[array_rand($messages)];

	}

}
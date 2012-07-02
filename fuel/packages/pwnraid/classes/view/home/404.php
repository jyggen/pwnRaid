<?php
namespace pwnRaid;

class View_Home_404 extends View_Base {

	public function view() {

		$messages    = array('Aw, crap!', 'Bloody Hell!', 'Uh Oh!', 'Huh?');
		$this->title = $messages[array_rand($messages)];

	}

}
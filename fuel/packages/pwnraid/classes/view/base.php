<?php
namespace pwnRaid;

class View_Base extends \ViewModel {

	public function before() {

		$class       = get_class($this);
		$this->_view = strtolower(str_replace('_', DS, preg_replace('#^([a-z0-9_]*\\\\)?(View_)?#i', '', $class))).'.twig';

		$this->set_view();

	}

}
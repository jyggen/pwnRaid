<?php
abstract class ViewModel extends \Fuel\Core\ViewModel
{

	protected function __construct($method, $auto_filter = null, $view = null)
	{

		$this->_auto_filter = $auto_filter;
		$this->_view === null and $this->_view = $view.'.twig';
		class_exists('Request', false) and $this->_active_request = \Request::active();

		if (empty($this->_view))
		{
			// Take the class name and guess the view name
			$class = get_class($this);
			$this->_view = strtolower(str_replace('_', DS, preg_replace('#^([a-z0-9_]*\\\\)?(View_)?#i', '', $class)).'.twig');
		}

		$this->set_view();

		$this->_method = $method;

		$this->before();

	}

}
<?php
class Controller_Base extends Controller_Hybrid {

	public $template = 'base.twig';

	public function before($data = null) {

		parent::before($data);

		$is_installed = Config::load('pwnraid.yml');
		$is_404       = ($this->request->controller == 'Controller_Index' && $this->request->action == '404');

		// Non-Ajax Request to a non-404 page when the system isn't installed? Setup time!
		if(!Input::is_ajax() && !$is_installed && !$is_404 && $this->request->controller != 'Controller_Setup') {

			Response::redirect('/setup');

		// Otherwise, throw a HttpNotFound if we try to run the setup again.
		} elseif($is_installed && $this->request->controller == 'Controller_Setup') {

			throw new HttpNotFoundException;

		}

	}

	public function after($response) {

		$response = parent::after($response);

		if($response->body instanceof View || $response->body instanceof ViewModel) {

			$css = Buildr::generate_links('css');
			$js  = Buildr::generate_links('js');

			$controller = strtolower(str_replace('Controller_', '', $this->request->controller));
			$action     = $this->request->action;

			$this->template->set('content', $response);
			$this->template->set('controller', $controller);
			$this->template->set('action', $action);
			$this->template->set_safe('js_files', $js);
			$this->template->set_safe('css_files', $css);

			return Response::forge($this->template, $response->status);

		} else {

			return $response;

		}

	}

}
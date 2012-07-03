<?php
class Controller_Base extends Controller_Hybrid {

	public $template = 'base.twig';

	public function before($data = null) {

		parent::before($data);

		// Unable to load pwnraid config? Setup!
		if(!Config::load('pwnraid.yml') && $this->request->controller != 'Controller_Setup') {

			Response::redirect('/setup');

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
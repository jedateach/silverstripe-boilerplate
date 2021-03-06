<?php

/**
 * @package {@packagename}
 * @subpackage controllers
 */
class AppController extends Controller {

	/**
	 * Handle 404 errors gracefully as the normal 404 error pages are part
	 * of the CMS module
	 */
	public function handleAction($request) {
		try {
			$response = parent::handleAction($request);

			return $response;
		}
		catch(SS_HTTPResponse_Exception $e) {
			$response = $e->getResponse();
			$response->addHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setBody($this->renderWith(array('Error', 'AppController')));

			return $response;
		}
	}

	/**
	 * Return a HTTP error to the user
	 */
	public function httpError($errorCode = '404', $errorMessage = null) {
		$this->response->setStatusCode($errorCode);
		$this->template = array('Error', 'AppController');
		
		$result = $this->customise(new ArrayData(array(
			'Title' => 'Whoops!',
			'Content' => DBField::create_field('HTMLText', $errorMessage)
		)));
		
		return $result;
	}

	public function init() {
		parenet::init();

		Requirements::combine_files('app.css', array(
			'app/css/normalize.css',
			'app/css/app.css'
		));

		Requirements::javascript('framework/thirdparty/jquery/jquery.js');
		Requirements::javascript('app/js/app.js');
	}
}
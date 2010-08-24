<?php

class AclAppController extends AppController {
	
	/**
	 * Controller beforeFilter callback.
	 * Called before the controller action. 
	 * 
	 * @return void
	 */
	function beforeRender() {
		$this->view = 'View';
		if (!$this->RequestHandler->isAjax())
			$this->layout = 'default';
	}
	
	
	function success() {
		header("HTTP/1.0 200 Success", null, 200);
		exit;
	}

	function failure() {
		header("HTTP/1.0 404 Failure", null, 404);
		exit;
	}

}

?>
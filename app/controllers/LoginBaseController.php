<?php

class LoginBaseController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function login() {


		return View::make('login.login');
		
		//$this->layout->nest('content', 'admin.login.login', compact('post'));
	}

}

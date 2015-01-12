<?php

class BaseAdminController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	
	public $layout = 'admin.layout';

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$sections_menu = Sections::where('active', '1')->get();
			$this->layout = View::make($this->layout, compact('sections_menu'));
		}
	}

	public function dashboard() {

		$this->layout->title = 'Dashboard';
		$this->layout->nest('content', 'admin.dashboard');

	}

}

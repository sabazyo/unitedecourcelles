<?php

class AdminSectionsController extends BaseAdminController {

	public function index() {
		
		$sections = Sections::all();
		$this->layout->title = 'Sections';
		$this->layout->ajaxs = ['sections'];
		$this->layout->nest('content', 'admin.sections', compact('sections'));
	}


	public function create() {
		//
		return '';
	}

	
	public function edit($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}


}

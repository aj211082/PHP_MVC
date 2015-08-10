<?php

class Help extends Controller {

	function __construct($components_path="") {
		parent::__construct($components_path);
	}
	
	function index() {
		$this->view->render('help/index');	
	}

	public function other($arg = false) {
		
		require 'models/help_model.php';
		$model = new Help_Model();
		$this->view->blah = $model->blah();
		
	}

}
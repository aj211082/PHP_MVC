<?php

// Help controller

class Help extends Controller {

	function __construct($components_path="") {
		parent::__construct($components_path);
	}

	// initialize  view
	function index() {
		$this->view->render('help/index');	
	}


}
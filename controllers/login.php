<?php

// Login controller

class Login extends Controller {

	function __construct($components_path="") {
		parent::__construct($components_path);
	}
	
	// initialize login view
	function index() {
		$this->view->render('login/index');
	}
	

}
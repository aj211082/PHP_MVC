<?php

class Login extends Controller {

	function __construct($components_path="") {
		parent::__construct($components_path);
	}
	
	function index() {
		$this->view->render('login/index');
	}
	

}
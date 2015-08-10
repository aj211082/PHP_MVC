<?php

class Error extends Controller {

	function __construct($components_path="") {
		parent::__construct($components_path);
	}
	
	function index() {
		$this->view->msg = 'This page doesnt exist';
		$this->view->render('error/index');
	}

}
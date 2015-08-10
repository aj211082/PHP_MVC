<?php

class Index extends Controller {

	function __construct($components_path="") {
		parent::__construct($components_path);
	}
	
	function index() {
		$this->view->render('index/index');
	}
	
	function details() {
		$this->view->render('index/index');
	}
	
}
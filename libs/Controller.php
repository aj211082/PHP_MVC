<?php

// main controller class

class Controller {
	/**
	 * @var string
	 */
	private $components_path;

	/**
	 * @param string $components_path
     */
	function __construct($components_path="") {
		// call view and pass js, css and other libraries path
		$this->view = new View($components_path);
		$this->components_path = $components_path;
	}

}
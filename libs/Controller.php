<?php

class Controller {

	function __construct($components_path="") {
		$this->view = new View($components_path);
	}

}
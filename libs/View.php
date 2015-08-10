<?php

class View {

	/**
	 * @param string $components_path
     */
	function __construct($components_path="") {
		$this->components_path = $components_path;
	}

	/**
	 * @param $name
	 * @param bool|false $noInclude
     */
	public function render($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'views/' . $name . '.php';	
		}
		else {
			require 'views/header.php';
			require 'views/' . $name . '.php';
			require 'views/footer.php';	
		}
	}

}
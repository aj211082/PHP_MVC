<?php
/* this class enables routes of the site */
class Bootstrap {

	/**
	 * @param string $components_path
     */
	function __construct($components_path="") {

		// get url parameter
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		// set component path so application can find css, js and other libraries
		$this->components_path = $components_path;

		// if there is no parameter passed, route to index file
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index($this->components_path);
			$controller->index();
			return false;
		}

		// prepare controller file if it exists
		$file = 'controllers/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		} else {
			$this->error();
		}

		// call to a constructor that will initialize appropriate view
		$controller = new $url[0]($this->components_path);

		// calling methods
		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} else {
				$this->error();
			}
		} else {
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				} else {
					$this->error();
				}
			} else {
				$controller->index();
			}
		}
		
		
	}

	/**
	 * @return bool
     */
	function error() {
		require 'controllers/error.php';
		$controller = new Error();
		$controller->index();
		return false;
	}

}
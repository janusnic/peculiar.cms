<?php

class Router
{
	protected $routes = [];

	public static function load($file)
	{
		$router = new static;
		require $file;
		return $router;
	}

	public function define($routes)
	{
		$this->routes = $routes;
	}

	public function direct($uri)
	{
		if (array_key_exists($uri, $this->routes)) {

			// include(CONTROLLERS.'/'.$this->routes[$uri].'.php');

			// $controller = new $this->routes[$uri];
			// return $controller;
			return $this->routes[$uri];
		}

		Throw new Exception('No route defined for this URI.');
	}
}
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

	public function get($uri, $controller)
	{
		$this->routes[$uri] = $controller;
	}

	// public function direct($uri)
	// {
	// 	if (array_key_exists($uri, $this->routes)) {
	// 		return $this->routes[$uri];
	// 	}

	// 	Throw new Exception('No route defined for this URI.');
	// }
	public function direct($uri)
	{   

		if (array_key_exists($uri, $this->routes)) {
			return $this->callAction(
			...explode('@', $this->routes[$uri])
			);
		}else{
		
			foreach ($this->routes as $key => $val){
				$pattern = preg_replace('#\(/\)#', '/?', $key);
				$pattern = "@^" .preg_replace('/{([a-zA-Z0-9\_\-]+)}/', '(?<$1>[a-zA-Z0-9\_\-]+)', $pattern). "$@D";
				preg_match($pattern, $uri, $matches);
				array_shift($matches);
				if($matches){
					$getAction = explode('@', $val);
					return $this->callAction($getAction[0], $getAction[1], $matches);
				}
			}
		}
		throw new Exception('No route defined for this URI.');
	}



	// public function direct($uri)
	// {   
		
	// 	if (array_key_exists($uri, $this->routes)) {		

	// 		return $this->callAction(
	// 			...explode('@', $this->routes[$uri])
	// 		);
	// 	}

	// 	Throw new Exception('No route defined for this URI.');

	// }



	// protected function callAction($controller, $action)
	// {
	// 	include(CONTROLLERS.'/'.$controller.'.php');
	// 	$controller = new $controller;

	
	// 	if (!method_exists($controller, $action)) {
	// 		throw New Exception(
	// 			"{$controller} does not respond to the {$action} action"
	// 		);
	// 	}

	// 	return $controller->$action();
	// }


	protected function callAction($controller, $action, $vars = []) // add $vars = [] in case $vars is empty
	{
		// $controller = "App\\Controllers\\{$controller}";
		include(CONTROLLERS.'/'.$controller.'.php');
		
		$controller = new $controller;
		
		if (! method_exists($controller, $action)) {
			throw new Exception(
			"{$controller} does not respond to the {$action} action."
			);
		}
		return $controller->$action($vars); // return $vars to the action
	}

}
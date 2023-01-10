<?php 
// VANILLA
$routes = [];
function route(string $path, callable $callback) {
	global $routes;
	$routes[$path] = $callback;
}

function runRoutes() {
	global $routes;
	$uri = $_SERVER['REQUEST_URI'];
	$found = false;
	foreach ($routes as $path => $callback) {
		if ($path !== $uri) continue;
		$found = true;
		$callback();
	}

	if (!$found) {
		$notFoundCallback = $routes['/'];
		$notFoundCallback();
	}
}

// main
route('/', function () { include_once 'pages/landing.php'; });
route('/email-test', function () { include_once 'pages/email-test.php'; });
route('/login', function () { include_once 'pages/login.php'; });
// rollers
route('/breeding-roller', function () { include_once 'pages/rollers/breeding-roller.php'; });
route('/lp-counter', function () { include_once 'pages/rollers/lp-counter.php'; });
route('/randomizer', function () { include_once 'pages/rollers/randomizer.php'; });

runRoutes();
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

// NOTE: ideally I would add in some kind of recursive array populator thingy that would go through the entire 'pages' directory and create a dictionary of page locations that could be accessed by the .php file names.
$routeDictionary = ['test'];
$paths = ['test'];
$dir = new DirectoryIterator('../pages');
foreach ($dir as $fileinfo) {
    if ($fileinfo->isDir() && !$fileinfo->isDot()) {
       array_push($paths, $fileinfo->getFilename());
    }
}
$debug->info($paths);

// main
route('/', function () { include_once '../pages/landing.php'; });
route('/email-test', function () { include_once '../pages/email-test.php'; });
route('/login', function () { include_once '../pages/login.php'; });
// rollers
route('/breeding-roller', function () { include_once '../pages/rollers/breeding-roller.php'; });
route('/lp-counter', function () { include_once '../pages/rollers/lp-counter.php'; });
route('/randomizer', function () { include_once '../pages/rollers/randomizer.php'; });

runRoutes();
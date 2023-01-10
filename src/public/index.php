<?php
// COMPOSER
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

// CONSOLE LOG DEBUGGING
$debug = new \bdk\Debug([
	'collect' => true,
	'output' => true,
	'route' => 'script',
]);

// DOT ENV
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// HEADER
include_once 'pages/header.php';

// ROUTING PAGES
// $debug->info($_GET['page']);
// if (isset($_GET["page"])) {
// 	include_once $_GET["page"];
// } 
// else {
// 	include_once 'pages/landing.php';
// }

include_once 'includes/routing.inc.php';

// FOOTER
include_once 'pages/footer.php';
?>
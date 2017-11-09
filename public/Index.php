<?php session_start();

define('ROOT', dirname(__DIR__));

require ROOT . '/app/app.php';
App::load();

if(isset($_GET['p']))
{
	$page = $_GET['p'];
}
else
{
	$page = 'profil.index';
}

$page = explode('.', $page);
if($page[0] === 'admin')
{
	$controller = '\App\Controller\admin\\' . ucfirst($page[1]) . 'Controller';
	$action = $page[2];
}
else
{
	$controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
	$action = $page[1];
}

$controller = new $controller;
$controller->$action();

?>
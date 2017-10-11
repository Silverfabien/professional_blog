<?php

use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';
App::load();

if(isset($_GET['p']))
{
	$page = $_GET['p'];
}
else
{
	$page = 'home';
}

// Auth

$app = App::getInstance();
$auth = new DBAuth($app->getDB());
if(!$auth->logged())
{
	$app->forbidden();
}

ob_start();
if($page === 'home')
{
	require ROOT . '/Views/admin/posts/Index.php';
}
elseif($page === 'posts.edit')
{
	require ROOT . '/Views/admin/posts/Edit.php';
}
elseif($page === 'posts.add')
{
	require ROOT . '/Views/admin/posts/Add.php';
}
elseif($page === 'posts.delete')
{
	require ROOT . '/Views/admin/posts/Delete.php';
}

$content = ob_get_clean();
require ROOT . '/Views/templates/default.php';


?>
<?php

use Core\Auth\DBAuth;

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

// Auth

$app = App::getInstance();
$auth = new DBAuth($app->getDB());
if(!$auth->logged())
{
	$app->forbidden();
}

ob_start();
if($page === 'post.index')
{
	require ROOT . '/views/admin/posts/index.php';
}
elseif($page === 'posts.edit')
{
	require ROOT . '/views/admin/posts/edit.php';
}
elseif($page === 'posts.add')
{
	require ROOT . '/views/admin/posts/edit.php';
}
elseif($page === 'posts.delete')
{
	require ROOT . '/views/admin/posts/delete.php';
}


$content = ob_get_clean();
require ROOT . '/views/templates/default.php';


?>
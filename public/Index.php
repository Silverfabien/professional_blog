<?php

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

ob_start();
if($page === 'home')
{
	require ROOT . '../app/Views/profil/Index.php';
}
else
{
	die('Acces interdit');
}


$content = ob_get_clean();
require ROOT . '../app/Views/templates/default.php';


?>
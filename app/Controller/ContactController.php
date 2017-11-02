<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class ContactController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('Contact');
	}

	public function index()
	{
		$form = new BootstrapForm($_POST);
		$this->render('contact.index', compact('form'));
	}
}

$errors = [];

if(!array_key_exists('auteur', $_POST) || $_POST['auteur'] == '')
{
	$errors['sujet'] = "Vous n'avez pas renseigné votre pseudo";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
	$errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('contenu', $_POST) || $_POST['contenu'] == '')
{
	$errors['contenu'] = "Vous n'avez pas renseigné le contenu";
}

session_start();

if(!empty($errors))
{
	$_SESSION['errors'] = $errors;
}
else
{
	$_SESSION['success'] = 1;
	$sujet = $_POST['sujet'];
	$contenu = $_POST['contenu'];
	$headers = 'FROM:' . $_POST['email'];
	mail('silversat60@gmail.com', $sujet, $contenu, $headers);
}

?>
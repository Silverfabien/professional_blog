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

	public function add()
	{
		if(!empty($_POST))
		{
			$result = $this->Contact->create(['auteur' => $_POST['auteur'], 'email' => $_POST['email'], 'sujet' => $_POST['sujet'], 'contenu' => $_POST['contenu']]);
			if($result)
			{
				return $this->index();
			}
		}
		$form = new BootstrapForm($_POST);
		$this->render('contact.index', compact('form'));
	}
}

?>
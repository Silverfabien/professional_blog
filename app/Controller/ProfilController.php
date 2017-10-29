<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class ProfilController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('Profil');
	}

	public function index()
	{
		$this->render('profil.index', compact('profil'));
	}
}

?>
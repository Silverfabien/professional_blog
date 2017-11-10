<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class CommentaireController extends AppController
{
	public function __construct() 
	{
		parent::__construct();
		$this->loadModel('Commentaire');
		$this->loadModel('Post');
	}

	public function add()
	{
		if(!empty($_POST))
		{
			$result = $this->Commentaire->create(['idArticle' => $_GET['id'], 'auteur' => $_POST['auteur'], 'contenu' => $_POST['contenu']]);
			if($result)
			{
				header('Location: index.php?p=posts.show&id=' . $_GET['id']); 
			}
		}
		$form = new BootstrapForm($_POST);
		$this->render('commentaire.edit', compact('form'));
	}

	public function edit()
	{
		$commentaire = $this->Commentaire->find($_GET['id']);
		if(!empty($_POST))
		{
			$result = $this->Commentaire->update($_GET['id'], ['auteur' => $_POST['auteur'], 'contenu' => $_POST['contenu']]);
			if($result)
			{	
				header('Location: index.php?p=posts.show&id=' . $commentaire->idArticle); 
			}
		}
		$form = new BootstrapForm($commentaire);
		$this->render('commentaire.edit', compact('form'));
	}
}
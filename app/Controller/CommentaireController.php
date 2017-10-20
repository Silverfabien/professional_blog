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

	public function index()
	{
		$commentaires = $this->Commentaire->last();
		$this->render('commentaire.index', compact('commentaires'));
	}

	public function show()
	{
		$com = $this->Commentaire->lastCommentaire($_GET['id']);
		$this->render('posts.show', compact('com'));
	}

	public function add()
	{
		if(!empty($_POST))
		{
			$result = $this->Commentaire->create(['idArticle' => $_GET['id'], 'auteur' => $_POST['auteur'], 'contenu' => $_POST['contenu']]);
			if($result)
			{
				return $this->index();
			}
		}
		$form = new BootstrapForm($_POST);
		$this->render('commentaire.edit', compact('form'));
	}

	public function edit()
	{
		if(!empty($_POST))
		{
			$result = $this->Commentaire->update($_GET['id'], ['auteur' => $_POST['auteur'], 'contenu' => $_POST['contenu']]);
			if($result)
			{
				return $this->index();
			}
		}
		$commentaire = $this->Commentaire->find($_GET['id']);
		$form = new BootstrapForm($commentaire);
		$this->render('commentaire.edit', compact('form'));
	}
}
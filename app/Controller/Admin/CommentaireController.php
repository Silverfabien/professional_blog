<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class CommentaireController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('Commentaire');
	}

	public function index()
	{
		$commentaires = $this->Commentaire->all();
		$this->render('admin.commentaire.index', compact('commentaires'));
	}

	public function add()
	{
		if(!empty($_POST))
		{
			$result = $this->Commentaire->create(['idArticle' => $_POST['idArticle'], 'auteur' => $_POST['auteur'], 'contenu' => $_POST['contenu']]);
			if($result)
			{
				return $this->index();
			}
		}
		$form = new BootstrapForm($_POST);
		$this->render('admin.commentaire.add', compact('form'));
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
		$post = $this->Commentaire->find($_GET['id']);
		$form = new BootstrapForm($post);
		$this->render('admin.commentaire.edit', compact('form'));
	}

	public function delete()
	{
		if(!empty($_POST))
		{
			$result = $this->Commentaire->delete($_POST['id']);
			return $this->index();
		}
	}
}

?>
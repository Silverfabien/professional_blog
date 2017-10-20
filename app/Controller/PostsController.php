<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class PostsController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('Post');
		$this->loadModel('Commentaire');
	}

	public function index()
	{
		$posts = $this->Post->last();
		$this->render('posts.index', compact('posts'));
	}

	public function show()
	{
		$article = $this->Post->findWithCategory($_GET['id']);
		$commentaires = $this->Commentaire->lastCommentaires($_GET['id']);
		var_dump($commentaires);
		$this->render('posts.show', compact('article', 'commentaires'));
	}

	public function add()
	{
		if(!empty($_POST))
		{
			$result = $this->Post->create(['titre' => $_POST['titre'], 'auteur' => $_POST['auteur'], 'chapo' => $_POST['chapo'], 'contenu' => $_POST['contenu']]);
			if($result)
			{
				return $this->index();
			}
		}
		$form = new BootstrapForm($_POST);
		$this->render('posts.edit', compact('form'));
	}

	public function edit()
	{
		if(!empty($_POST))
		{
			$result = $this->Post->update($_GET['id'], ['titre' => $_POST['titre'], 'auteur' => $_POST['auteur'], 'chapo' => $_POST['chapo'], 'contenu' => $_POST['contenu']]);
			if($result)
			{
				return $this->index();
			}
		}
		$post = $this->Post->find($_GET['id']);
		$form = new BootstrapForm($post);
		$this->render('posts.edit', compact('form'));
	}


}

?>
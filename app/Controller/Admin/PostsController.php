<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class PostsController extends AppController
{
	public function __construct()
	{
		parent::__construct();
		$this->loadModel('Post');
	}

	public function index()
	{
		$posts = $this->Post->all();
		$this->render('admin.posts.index', compact('posts'));
	}

	public function add()
	{
		if(!empty($_POST))
		{
			$result = $this->Post->create(['titre' => $_POST['titre'], 'auteur' => $_POST['auteur'], 'contenu' => $_POST['contenu']]);
			if($result)
			{
				return $this->index();
			}
		}
		$form = new BootstrapForm($_POST);
		$this->render('admin.posts.edit', compact('form'));
	}

	public function edit()
	{
		if(!empty($_POST))
		{
			$result = $this->Post->update($_GET['id'], ['titre' => $_POST['titre'], 'auteur' => $_POST['auteur'], 'contenu' => $_POST['contenu']]);
			if($result)
			{
				return $this->index();
			}
		}
		$post = $this->Post->find($_GET['id']);
		$form = new BootstrapForm($post);
		$this->render('admin.posts.edit', compact('form'));
	}

	public function delete()
	{
		if(!empty($_POST))
		{
			$result = $this->Post->delete($_POST['id']);
			return $this->index();
		}
	}
}

?>
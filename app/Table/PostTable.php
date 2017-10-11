<?php

namespace App\Table;

use Core\Table\Table;

class PostTable extends Table
{
	protected $table = 'articles';

	/**
	 * Récupère les derniers article
	 * @return array
	 */

	public function last()
	{
		return $this->query("SELECT articles.id, articles.titre, articles.contenu, articles.auteur, articles.dateAjout FROM articles ORDER BY articles.dateAjout DESC");
	}

		public function findWithCategory($id)
	{
		return $this->query("SELECT articles.id, articles.titre, articles.contenu, articles.auteur, articles.dateAjout FROM articles WHERE articles.id = ?", [$id], true);
	}
}

?>
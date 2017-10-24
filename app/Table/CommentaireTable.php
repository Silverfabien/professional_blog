<?php

namespace App\Table;

use Core\Table\Table;

class CommentaireTable extends Table
{
	protected $table = 'commentaire';

	/**
	 * Récupère les derniers article
	 * @return array
	 */

	public function last()
	{
		return $this->query("SELECT commentaire.id, commentaire.contenu, commentaire.auteur, commentaire.date FROM commentaire ORDER BY commentaire.date DESC");
	}

	public function lastCommentaire($id)
	{
		return $this->query("SELECT commentaire.id, commentaire.auteur, commentaire.contenu, commentaire.date FROM commentaire WHERE commentaire.id = ?", [$id], true);
	}

	public function lastCommentaires($idArticle)
	{
		return $this->query("SELECT id, auteur, contenu, `date` FROM commentaire WHERE idArticle = ?", [$idArticle]);
	}

}
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

	public function lastCommentaires($idArticle)
	{
		return $this->query("SELECT id, auteur, contenu, `date` FROM commentaire WHERE idArticle = ?", [$idArticle]);
	}
}
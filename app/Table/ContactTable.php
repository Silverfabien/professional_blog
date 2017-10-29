<?php

namespace App\Table;

use Core\Table\Table;

class ContactTable extends Table
{
	protected $table = 'contact';

	/**
	 * Récupère les derniers article
	 * @return array
	 */

	public function message()
	{
		return $this->query("SELECT id, auteur, mail, sujet, contenu FROM contact");
	}
}

?>
<?php

namespace App\Entity;

use Core\Entity\Entity;

class ContactEntity extends Entity
{
	public function getUrl()
	{
		return 'index.php?p=contact.index';
	}
}

?>
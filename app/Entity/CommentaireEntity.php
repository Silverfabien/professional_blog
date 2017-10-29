<?php

namespace App\Entity;

use Core\Entity\Entity;

class CommentaireEntity extends Entity
{
	public function getUrl()
	{
		return 'Index.php?p=commentaire.show&id=' . $this->id;
	}

	public function getDateformat()
	{
		$a = strtotime($this->date);
		setlocale(LC_ALL, 'FR').': ';
		$date = iconv('ISO-8859-1', 'UTF-8', strftime('%A %d %B %Y', $a) . ' a ' . strftime('%H', $a) . 'h' . strftime('%M', $a));
		return $date;
	}
}

?>
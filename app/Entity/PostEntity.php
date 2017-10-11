<?php

namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity
{
	public function getUrl()
	{
		return 'IBlog.php?p=posts.show&id=' . $this->id;
	}

	public function getExtrait()
	{
		$html = '<p>' . substr(htmlspecialchars($this->contenu), 0, 100) . '...</p>';
		$html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';
		return $html;
	}

	public function getDateformat()
	{
		$a = strtotime($this->dateAjout);
		setlocale(LC_ALL, 'FR').': ';
		$date = iconv('ISO-8859-1', 'UTF-8', strftime('%A %d %B %Y', $a) . ' a ' . strftime('%H', $a) . 'h ' . strftime('%M', $a) . 'min et ' . strftime('%S', $a) . 'sec') .'<br />';
		return $date;
	}
}

?>



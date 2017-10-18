<?php

namespace App\Entity;

use Core\Entity\Entity;
use CommentaireEntity;

class PostEntity extends Entity
{
	public function getUrl()
	{
		return 'Blog.php?p=posts.show&id=' . $this->id;
	}

	public function getExtrait()
	{
		$html = '<p>' . substr(htmlspecialchars($this->chapo), 0, 255) . '...</p>';
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



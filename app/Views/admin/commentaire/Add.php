<form method="post">
	<?= $form->input('idArticle', 'IdArticle'); ?>
	<?= $form->input('auteur', 'nom l\'auteur'); ?>
	<?= $form->input('contenu', 'contenu', ['type' => 'textarea']); ?>
	<button class="btn btn-primary">Sauvegarder</button>
</form>
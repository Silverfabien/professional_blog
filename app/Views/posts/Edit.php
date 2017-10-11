<form method="post">
	<?= $form->input('auteur', 'nom l\'auteur'); ?>
	<?= $form->input('titre', 'titre de l\'article'); ?>
	<?= $form->input('contenu', 'contenu', ['type' => 'textarea']); ?>
	<button class="btn btn-primary">Sauvegarder</button>
</form>
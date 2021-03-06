<h2>Me contacter</h2><br>

<p>Vous voulez me contacter pour plus d'informations ? Alors remplissez les champs ci-dessous et je vous répondrai dans les plus brefs délais.</p>

<?php if(array_key_exists('errors', $_SESSION)): ?>

	<div class="alert alert-danger">
		<?= implode('<br>', $_SESSION['errors']); ?>
	</div>
<?php endif; ?>

<?php if(array_key_exists('success', $_SESSION)): ?>

	<div class="alert alert-success">
		Votre email a bien été envoyé.
	</div>
<?php endif; ?>

<form method="post">
	<?= $form->input('auteur', 'Auteur :'); ?>
	<?= $form->input('email', 'Votre email :'); ?>
	<?= $form->input('contenu', 'contenu :', ['type' => 'textarea']); ?>
	<button class="btn btn-primary">Envoyer</button>
</form>
<br>

<?php

unset($_SESSION['errors']);
unset($_SESSION['success']);

?>
<?php if($errors): ?>
	<div class="alert alert-danger">
		Identifiant incorrect
	</div>
<?php endif; ?>


<form method="post">
	<?= $form->input('username', 'Pseudo'); ?>
	<button class="btn btn-primary">Envoyer</button>
</form><br>
<p>
	<a href="?p=commentaire.add" class="btn btn-success">Ajouter</a>
</p>
<div class="row">
	<div class="col-sm-8">

		<?php foreach($commentaires as $commentaire): ?>

			<h2><a href="<?= $commentaire->url ?>"><?= htmlspecialchars($commentaire->auteur); ?></a></h2>

			<p><strong><?= htmlspecialchars($commentaire->auteur); ?></strong> a posté le post le <?= $commentaire->dateFormat; ?></p>

			<p><?= htmlspecialchars($commentaire->contenu); ?></p>

		<?php endforeach; ?>
	</div>
</div>

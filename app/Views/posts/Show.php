<a class="btn btn-primary" href="?p=posts.edit&id=<?= $article->id; ?>">Editer</a>
<a class="btn btn-success" href="?p=commentaire.add&id=<?= $article->id; ?>">Commenter</a>
<a href="index.php?p=posts.index">Index</a>

<div style="background: #eeeeee; border: 2px solid #bbbbbb;">
	<div style="background: #dddddd; border-bottom: 1px solid #bbbbbb;">
		<h1><?= htmlspecialchars($article->titre); ?></h1>

		<p><strong><em><?= htmlspecialchars($article->auteur); ?></strong> a posté le post le <?= $article->dateFormat; ?></em></p>
	</div>

	<p><?= htmlspecialchars($article->contenu); ?></p>
</div><br>

<?php foreach ($commentaires as $commentaire): ?>
<div class="container">
	<div class="row">
	<a href="?p=commentaire.edit&id=<?= $commentaire->id; ?>">Éditer</a>
		<div class="col-md-12" style="border: 2px solid #bbbbbb;">
			<div class="row">
				<div class="col-md-3" style="background: #dddddd; border-right: 2px solid #bbbbbb;">
					<h3><?= htmlspecialchars($commentaire->auteur); ?></h3>
					<p><em><?= htmlspecialchars($commentaire->dateFormat); ?></em></p>
				</div>
				<div class="col-md-9" style="background: #eeeeee; ">
					<p><?= htmlspecialchars($commentaire->contenu); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?><br>

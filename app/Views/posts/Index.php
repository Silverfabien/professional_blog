<p>
	<a href="?p=posts.add" class="btn btn-success">Ajouter</a>
</p>
<div class="row">
	<div class="col-sm-8">
		
		<?php foreach($posts as $post): ?>

			<h2><a href="<?= $post->url ?>"><?= htmlspecialchars($post->titre); ?></a></h2>

			<p><strong><?= htmlspecialchars($post->auteur); ?></strong> a posté le post le <?= $post->dateFormat; ?></p>

			<p><?= $post->extrait; ?></p>

		<?php endforeach; ?>
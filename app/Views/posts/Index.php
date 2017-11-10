	<p>
		<a href="?p=posts.add" class="btn btn-success">Ajouter</a>
	</p>
	<div class="row">
		<div class="col-sm-12">
			<?php foreach($posts as $post): ?>

				<div style="border: 2px solid #bbbbbb; background: #eeeeee;">
					<div style="background: #ddd; border-bottom: 1px solid #bbbbbb;">
						<h2><a href="<?= $post->url ?>"><?= htmlspecialchars($post->titre); ?></a></h2>

						<p><em><strong><?= htmlspecialchars($post->auteur); ?></strong> a posté le post le <?= $post->dateFormat; ?></em></p>
					</div>
						<?= $post->extrait; ?>
				</div>
				<br>

			<?php endforeach; ?>

		</div>
	</div>

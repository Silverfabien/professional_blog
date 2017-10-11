<h1>Administrer les articles</h1>

<p>
	<a href="?p=admin.posts.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
	<thead>
		<td>Id</td>
		<td>Titre</td>
		<td>Auteur</td>
		<td>Action</td>
	</thead>
	<tbody>
		<?php foreach ($posts as $post): ?>
			<tr>
				<td><?= $post->id; ?></td>
				<td><?= htmlspecialchars($post->titre); ?></td>
				<td><?= htmlspecialchars($post->auteur); ?></td>
				<td>
					<a class="btn btn-primary" href="?p=admin.posts.edit&id=<?= $post->id; ?>">
					Editer</a>

					<form action="?p=admin.posts.delete" method="post" style="display: inline;">
						<input type="hidden" name="id" value="<?= $post->id ?>">
						<button type="submit" class="btn btn-danger">Supprimer</button>
					</form>
					
					
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="?p=admin.posts.index">Posts</a>

<h1>Administrer les commentaires</h1>

<p>
	<a href="?p=admin.commentaire.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
	<thead>
		<td>Id</td>
		<td>idArticle</td>
		<td>Auteur</td>
		<td>Action</td>
	</thead>
	<tbody>
		<?php foreach ($commentaires as $commentaire): ?>
			<tr>
				<td><?= $commentaire->id; ?></td>
				<td><?= $commentaire->idArticle; ?></td>
				<td><?= htmlspecialchars($commentaire->auteur); ?></td>
				<td>
					<a class="btn btn-primary" href="?p=admin.commentaire.edit&id=<?= $commentaire->id; ?>">
					Editer</a>

					<form action="?p=admin.commentaire.delete" method="post" style="display: inline;">
						<input type="hidden" name="id" value="<?= $commentaire->id ?>">
						<button type="submit" class="btn btn-danger">Supprimer</button>
					</form>
					
					
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
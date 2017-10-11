<a class="btn btn-primary" href="?p=posts.edit&id=<?= $article->id; ?>">Editer</a>					

<h1><?= htmlspecialchars($article->titre); ?></h1>

<p><strong><em><?= htmlspecialchars($article->auteur); ?></strong> a posté le post le <?= $article->dateAjout; ?></em></p>

<p><?= htmlspecialchars($article->contenu); ?></p>
<a class="btn btn-primary" href="?p=posts.edit&id=<?= $article->id; ?>">Editer</a>
<a class="btn btn-success" href="?p=commentaire.edit&id=<?= $article->id; ?>">Commenter</a>

<h1><?= htmlspecialchars($article->titre); ?></h1>

<p><strong><em><?= htmlspecialchars($article->auteur); ?></strong> a posté le post le <?= $article->dateAjout; ?></em></p>

<p><?= htmlspecialchars($article->contenu); ?></p>
<a class="btn btn-success" href="?p=commentaire.edit&id=<?= $com->id; ?>">Editer</a>

<h1><?= htmlspecialchars($com->auteur); ?></h1>

<p><strong><em><?= htmlspecialchars($com->auteur); ?></strong> a posté le post le <?= $com->dateFormat; ?></em></p>

<p><?= htmlspecialchars($com->contenu); ?></p>

<a href="Index.php?p=commentaire.index">Index</a>


<?php var_dump($commentaire); ?>

<h1><?= htmlspecialchars($commentaire->auteur); ?></h1>

<p><strong><em><?= htmlspecialchars($commentaire->auteur); ?></strong> a posté le post le <?= $commentaire->date; ?></em></p>

<p><?= htmlspecialchars($commentaire->contenu); ?></p>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog - Accueil</title>
</head>

<body>

    <header>
        <h1>Mon Blog.</h1>

        <nav>
            <a href="index.php">Accueil</a>
            <a href="#">Catégories</a>
            <a href="#">À propos</a>
        </nav>
    </header>

    <main>

        <h2>Nos derniers articles</h2>

        <section class="filtre-categories">

            <h2>Explorer par thème</h2>

            <div class="liste-filtres">

                <a href="index.php" class="pilule-filtre actif">
                    Tous les articles
                </a>

                <?php foreach ($categories as $cat): ?>

                    <a href="categorie.php?id=<?= $cat['id'] ?>" class="pilule-filtre">
                        <?= htmlspecialchars($cat['libelle']) ?>
                    </a>

                <?php endforeach; ?>

            </div>

        </section>

        <div class="grille-articles">

            <?php foreach ($articles as $article): ?>

                <article class="carte-article">

                    <span class="etiquette-categorie <?php if ($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">
                        <?= htmlspecialchars($article['categorie_libelle']) ?>
                    </span>

                    <?php if ($article['id'] == 1): ?>
                        <small class="badge-special">⭐ À la une</small>
                    <?php endif; ?>

                    <h3>
                        <?= htmlspecialchars($article['titre']) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars(substr($article['contenu'], 0, 100)) ?>...
                    </p>

                    <p>
                        Date :
                        <?= date('d/m/Y', strtotime($article['date_creation'])) ?>
                    </p>

                </article>

            <?php endforeach; ?>

        </div>

    </main>

    <footer>
        <p>&copy; 2026 - Mon Blog. Tous droits réservés.</p>
    </footer>

</body>

</html>

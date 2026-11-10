
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

        <div class="grille-articles">

            <?php foreach ($articles as $article): ?>

                <article class="carte-article">

                    <span>
                        <?= htmlspecialchars($article['categorie_libelle']) ?>
                    </span>

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

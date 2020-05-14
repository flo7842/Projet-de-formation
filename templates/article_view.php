<?php $pagetitle = "ParIciSainté | Actualité"; ?>
<?php include 'partials/header2.php'; ?>
    <div class="container container-bis">
        <h1 class="titre-actu">Actualité du club</h1>
        <?php foreach ($article as $articles): ?>
            <article class="art-actu">
                <h2><?= htmlspecialchars($articles['title']); ?></h2>
                <img src="img/<?= htmlspecialchars($articles['img']); ?>" alt="article actualité"/>
                <p><?= htmlspecialchars($articles['content']);?></p>
                <span><?= htmlspecialchars($articles['publish_date']); ?></span>
                <fieldset>
                    <legend><?= htmlspecialchars($articles['author']);?></legend>
                </fieldset>
                
            </article>
        <?php endforeach; ?>
    </div>
<?php include 'partials/footer.php'; ?>
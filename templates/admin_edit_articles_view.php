<?php $pagetitle = "ParIciSainté | éditer les articles"; ?>
<?php include 'partials/header2.php'; ?>
<div class="container container-bis">
    <div class="container-form">
        <h1>Modifier l'article</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']?>"/>
            <div class="inner-wrap">
                <label for="title">Modifier le Nom de l'article</label>
                <input type="text" id="title" name="article_title" value="<?= htmlspecialchars($findArticles['title']); ?>">
            </div>
            <div class="inner-wrap">
                <label for="content">Modifier le contenu de l'article</label>
                <textarea id="content" name="article_content"><?= htmlspecialchars($findArticles['content']); ?></textarea>
            </div>
            <div class="inner-wrap">
                <label for="article-img">Modifier l'image de l'article'</label>
                <input type="file" id="article-img" name="article_img" class="label-file" value="<?= "/img/".htmlspecialchars($findArticles['img']); ?>">
            </div>
            <div class="inner-wrap">
                    <label for="txt-alt">Text alternatif :</label>
                    <input type="text" id="txt-alt" name="img_alt" value="<?= htmlspecialchars($findArticles['alt']); ?>"/>
                </div>
            <div class="inner-wrap">
                <label for="date-art">Modifier l'auteur de l'article</label>
                <input type="text" id="date-art" name="article_author" value="<?= htmlspecialchars($findArticles['author']); ?>"/>
            </div>
            <div class="inner-wrap">
                <button type="submit" name="formConnexion">Modifier</button>
            </div>
        </form>
    </div>
</div>
<?php include 'partials/footer.php'; ?>
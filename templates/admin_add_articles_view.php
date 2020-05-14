<?php $pagetitle = "ParIciSainté | Ajouter des articles"; ?>
<?php include 'partials/header2.php';  ?>

    <div class="container container-bis">
        <div class="container-form">
            <h1>Ajouter un article</h1>
            <form action="#" method="POST" enctype="multipart/form-data" class="form-add">
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']?>"/>
                <div class="inner-wrap">
                    <label for="article_title">Titre de l'article :</label>
                    <?= $form->input('text', 'article_title', null, 'article_title', 'Ex: Jour de Match'); ?>
                </div>
                <div class="inner-wrap">
                    <label for="articleContent">Contenu de l'article :</label>
                    <textarea id="articleContent" placeholder="Ex: Aujourd'hui les verts reçoivent..." name="article_content"></textarea>
                </div>
                <div class="inner-wrap">
                    <label for="article_img">Photo de l'article:</label>
                    <?= $form->input('file', 'article_img', 'label-file', 'article_img', null); ?>

                </div>
                <div class="inner-wrap">
                    <label for="img_alt">Text alternatif :</label>
                    <?= $form->input('text', 'img_alt', null, 'img_alt', 'Ex: photo de supporter'); ?>
                </div>
                <div class="inner-wrap">
                    <label for="article_author">Auteur :</label>
                    <?= $form->input('text', 'article_author', null, 'article_author', 'Ex: sophie'); ?>
                </div>
                <div class="inner-wrap">
                    <?= $form->submit('formConnexion'); ?>
                </div>
            </form>
        </div>
    </div>
<?php include 'partials/footer.php'; ?>
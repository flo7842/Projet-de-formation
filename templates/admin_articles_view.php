<?php $pagetitle = "ParIciSainté | Listings des Articles"; ?>
<?php include 'partials/header2.php'; ?>
    <div class="container container-bis">
        <main>
            <div class="table-article">
                <table class="table-dark">
                    <tr>
                        <th>Titre de l'article</th>
                        <th>Description</th>
                        <th>Date de publication</th>
                        <th>Image</th>
                        <th>Texte alternatif</th>
                        <th>Auteur</th>
                        <th>Action</th>
                </tr>

                    <?php foreach($articles as $article): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($article['title']); ?></td>
                        <td><?php echo htmlspecialchars($article['content']);?></td>
                        <td><?php echo htmlspecialchars($article['publish_date']); ?></td>
                        <td><?php echo htmlspecialchars($article['img']); ?></td>
                        <td><?php echo htmlspecialchars($article['alt']); ?></td>
                        <td><?php echo htmlspecialchars($article['author']);?></td>
                        <td><a class="edit-article" href="/paricisainte/public/admin/edit/articles?id=<?= $article['id'];?>">Modifier</a><br/><form action="/paricisainte/public/admin/delete?id=<?= $article['id'];?>" method="POST"><input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>"><button type="submit" name="button" class="delete">Supprimer</button> </form></td>

                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </main>
    </div>
<?php include 'partials/footer.php'; ?>
<?php $pagetitle = "ParIciSainté | Contact"; ?>
<?php include 'partials/header2.php'; ?>
<div class="container container-bis">
    <main class="page-contact">
        <h2>Formulaire de contact</h2>
        <div class="container-form">
            <form action="#" method="post">
                <?php foreach ($messages as $message): ?>
                    <div class="msg">
                        <p><?= $message; ?></p>
                    </div>
                <?php endforeach; ?>
                <div class="section-form"><span>1</span><p class="mt-span">Nom &amp; Prénom</p></div>
                <div class="inner-wrap">
                    <label>Nom*</label>
                    <?= $form->input('text', 'nom',null, 'name', 'Votre Nom'); ?>

                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']?>"/>
                </div>
                <div class="section-form"><span>2</span><p class="mt-span">Email</p></div>
                <div class="inner-wrap">
                    <label>Email</label>
                    <?= $form->input('email', 'email', null, 'mail', 'paricisainte@flodevfullstackportfolio.com' ); ?>
                </div>
                <div class="section-form"><span>3</span><p class="mt-span">Sujet</p></div>
                <div class="inner-wrap">
                    <label>Sujet</label>
                    <?= $form->input('text', 'sujet', null, 'subject', 'Sujet du message'); ?>
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']?>"/>
                </div>
                <div class="section-form"><span>4</span><p class="mt-span">Message</p></div>
                <div class="inner-wrap">
                    <label>Message</label>
                    <textarea name="msg" placeholder="Entrez votre message"></textarea>
                </div>
                <div class="button-section">
                    <?= $form->submit('formValid'); ?>
                </div>
            </form>
        </div>
        <article class="article-contact">
            <h1 id="titre-contact">Nous Contacter</h1>
            <div id="president">
                <div class="info-president">
                    <h2>Président de l'association</h2>
                    <p>Philippe BOURGEOIS</p>
                </div>
                <div class="info-secretaire">
                    <h2>Secrétaire de l'association</h2>
                    <p>Sophie MIGOUT</p>
                </div>
            </div>
            <div class="contact-association">
                <h3>Nous retrouver</h3>
                <div class="join-us">
                    <a href="mailto:philippe.bourgeois@dalkia.fr" rel="cc:morePermissions"><h4 class="mail">Ecrivez-nous</h4></a>
                </div>
                <div class="call-us">
                    <a href="tel:0618026898"><h4 class="phone">Appelez-nous</h4></a>

                </div>
                <div class="reseaux-sociaux">
                    <a href="https://www.facebook.com/Section-Par-Ici-Saint%C3%A9-1541860955869874/" onclick="window.open(this.href); return false;"><h4 class="fb">Page Facebook</h4></a>
                </div>
            </div>
        </article>
    </main>
</div>
<?php include 'partials/footer.php'; ?>
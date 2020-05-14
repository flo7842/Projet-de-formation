<?php $pagetitle = "ParIciSainté | Inscription"; ?>
<?php include 'partials/header2.php'; ?>
<div class="container-register">
    <div class="container-form">
        <h1>Inscrits-toi Si tu veux recevoir les infos du groupe</h1>
        <form action="#" method="post">
            <?php foreach ($errors as $error): ?>
                <div class="errors">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span><?= $error; ?></span>
                </div>
            <?php endforeach; ?>
            <p>Les champs indiqués par une * sont obligatoires</p>
            <div>
                <div class="section-form">
                    <span>1</span>
                    <p class="mt-span">Nom &amp; Prénom</p>
                </div>
                <div class="inner-wrap">
                    <label>Nom*</label>
                    <?= $form->input('text', 'last-name', null, 'lastName', 'Ex: Dupont'); ?>
                    <label>Prénom*  </label>
                    <?= $form->input('text', 'firstname',null, 'firstName', 'Ex: Jean'); ?>
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']?>"/>
                </div>
                <div class="section-form">
                    <span>2</span>
                    <p class="mt-span">Pseudo &amp; Email</p>
                </div>
                <div class="inner-wrap">
                    <label>Pseudo*</label>
                    <?= $form->input('text', 'pseudo', null, 'pseudo', 'Ex: jean92100'); ?>
                    <label>Email*</label>
                    <?= $form->input('email', 'email', null, 'mail', 'Ex: jean_dupont@gmail.com'); ?>
                    <label>Confirmation Email*</label>
                    <?= $form->input('email', 'mail-confirm',null, 'mail-confirm', null); ?>
                </div>
            </div>
            <div class="section-form">
                <span>3</span>
                <p class="mt-span">Mot de passe</p>
            </div>
            <div class="inner-wrap">
                <label>Mot de passe* </label>
                <?= $form->input('password', 'password', null, 'password', null); ?>
                <label>Confirmation du Mot de passe* </label>
                <?= $form->input('password', 'password-confirm', null, 'password-confirm', null); ?>
            </div>
            <div class="button-section">
                <?= $form->submit('formValid'); ?>
            </div>
        </form>
    </div>
</div>
<?php include 'partials/footer.php'; ?>
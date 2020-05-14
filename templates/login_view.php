<?php $pagetitle = "ParIciSainte | Connexion"; ?>
<?php include 'partials/header2.php'; ?>

    <div class="container-register">
        <div class="container-form">
            <h1>Connexion</h1>

            <form  action="#" method="POST">
                <?php foreach ($errors as $error): ?>
                    <div class="errors">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span><?= $error; ?></span>
                    </div>
                <?php endforeach; ?>
                <div class="section-form"><span>1</span><p class="mt-span">Email</p></div>
                <div class="inner-wrap">
                    <label for="mail"></label>

                    <?= $form->input('Email', 'mail', null, 'mail', 'Ex: jean_dupont@gmail.com'); ?>

                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']?>"/>
                </div>
                <div class="section-form"><span>2</span><p class="mt-span">Mot de passe</p></div>
                <div class="inner-wrap">
                        <label for="mdp"></label>
                        <?= $form->input('password','password', '', 'password'); ?>
                </div>

                <div class="button-section">
                    <?= $form->submit('formValid'); ?>

                </div>

            </form>
        </div>
    </div>
<?php include 'partials/footer.php'; ?>
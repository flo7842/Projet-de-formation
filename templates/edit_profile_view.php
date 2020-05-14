<?php $pagetitle = "ParIciSainte | éditer profil"; ?>
<?php include 'partials/header2.php'; ?>

        <div class="container">
            <div class="container-form">
            <h1>Modification du profil</h1>
                <form  action="#" method="POST">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']?>"/>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nom :</label>
                        <input type="text" name="lastName" placeholder="Ex: Dupont" value="<?= htmlspecialchars($recupUser['last_name']);?>"/>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Prénom :</label>
                        <input type="text" name="firstName" placeholder="Ex: Jean" value="<?= htmlspecialchars($recupUser['first_name']);?>"/>
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Pseudo :</label>
                        <input type="text" name="pseudo"  placeholder="Ex: toto" value="<?= htmlspecialchars($recupUser['pseudo']);?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="Email" name="mail"  placeholder="Ex: jean_dupont@gmail.com" value="<?= htmlspecialchars($recupUser['mail']);?>"/>
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" name="password" />
                    </div>
                    <div class="form-group">
                        <?= $form->submit('formValid'); ?>
                    </div>
                </form>
            </div>
        </div>
<?php include 'partials/footer.php'; ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($pagetitle) ? $pagetitle : 'ParIciSainte'; ?></title>
    <meta name="description" content="Rejoignez la communnauté vertes au sein d'un groupe de passionné">
    <meta name="viewport" content="width=device-width initial-scale=1, maximum-scale=1, user-scalable=1" />


    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/fontawesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/brands.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/regular.css">
    <?php define( 'SCRIPT_ROOT', 'http://flodevfullstackportfolio.com/paricisainte/public' ); ?>
    <?php echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT.'/css/normalize.css">';?>
    <?php echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT.'/css/style.css?ver=1">';?>

</head>
<body>
<header>
    <nav class="menu_desktop">
        <ul>
            <li><a href="/paricisainte/public/home">Accueil</a></li>
            <?php if(isset($_SESSION['user'])){ ?>
                <?php if($_SESSION['user']['role'] === 'ROLE_USER'){ ?>
                    <li><a href="/paricisainte/public/article">Actualités</a></li>
                    <li>
                        <a href="#">Association</a>
                        <ul class="sous-menu">
                            <li class="ss-rub"><a href="/paricisainte/public/presentation">Présentation</a></li>
                            <li class="ss-rub"><a href="/paricisainte/public/membership">Adhésions</a></li>
                            <li class="ss-rub"><a href="/paricisainte/public/handiverts">Handi-verts</a></li>
                            <li class="ss-rub"><a href="/paricisainte/public/contact">Contactez-nous</a></li>
                        </ul>
                    </li>
                <?php } ?>
                <?php if($_SESSION['user']['role'] === 'ROLE_ADMIN'){ ?>
                    <li><a href="/paricisainte/public/article">Actualités</a></li>
                    <li>
                        <a href="#">Association</a>
                        <ul class="sous-menu">
                            <li class="ss-rub"><a href="/paricisainte/public/presentation">Présentation</a></li>
                            <li class="ss-rub"><a href="/paricisainte/public/membership">Adhésions</a></li>
                            <li class="ss-rub"><a href="/paricisainte/public/handiverts">Handi-verts</a></li>
                            <li class="ss-rub"><a href="/paricisainte/public/contact">Contactez-nous</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Articles</a>
                        <ul class="sous-menu-sc">
                            <li class="ss-rub"><a href="/paricisainte/public/admin/addarticles">Ajouter des articles</a></li>
                            <li class="ss-rub"><a href="/paricisainte/public/admin/articles">Voir la liste des articles</a></li>
                        </ul>
                    </li>
                <?php } ?>
            <?php }else{ ?>
                <li>
                    <a class="nav-link" href="register">Inscription</a>
                </li>
                <li>
                    <a class="nav-link" href="login">Connexion</a>
                </li>

            <?php }?>
        </ul>
    </nav>
    <?php if(isset($_SESSION['user'])){ ?>
        <div class="log">
            <i id="user" class="fas fa-user-circle"></i>
            <div id="connect" class="connexion">

                <div id="user-edit" class="edit">
                    <div class="div-user">
                        <p class="user"><?php echo " ". htmlspecialchars($_SESSION['user']['pseudo']); ?></p>
                    </div>
                    <a class="edit-profile" href="/paricisainte/public/edit/profile">éditer</a>
                    <a class="logout" href="/paricisainte/public/logout">Déconnexion</a>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php include 'menu_hamburger.php';?>
    <div class="intro-desktop">
        <span class="titre-intro">Ensemble parcourons les Kilomètres qui nous séparent de notre club Mythique</span>
        <p class="bonus">Vous serez prioritaire pour réserver les billets des rencontres à domicile ou à l'extérieur</p>
    </div>
    <div id="logo1">
    <a href="/paricisainte/public/home"><img src="/paricisainte/public/img/logoparicisainte(1).svg" alt="Logo de ParIciSainté"></a>
        <p>Groupe de l'USS</p>
    </div>
</header>
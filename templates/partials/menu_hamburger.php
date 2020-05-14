<button id="hamburger-button">&#9776;</button>
<div id="hamburger-overlay"></div>
<div id="hamburger">
    <div id="hamburger-content">
        <nav class="nav-mobile">
            <ul class="menu-burger">
                <li><a href="/paricisainte/public/home">Accueil</a></li>
                <?php if(isset($_SESSION['user'])){ ?>
                    <?php if($_SESSION['user']['role'] === 'ROLE_USER'){ ?>
                        <li><a href="/paricisainte/public/articles">Actualités</a></li>
                        <li>
                            <a href="#" class="no-click">Association</a>
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
                            <a href="#" class="no-click">Association</a>
                            <ul class="sous-menu">
                                <li class="ss-rub"><a href="/paricisainte/public/presentation">Présentation</a></li>
                                <li class="ss-rub"><a href="/paricisainte/public/membership">Adhésions</a></li>
                                <li class="ss-rub"><a href="/paricisainte/public/handiverts">Handi-verts</a></li>
                                <li class="ss-rub"><a href="/paricisainte/public/contact">Contactez-nous</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="no-click">Articles</a>
                            <ul class="sous-menu">
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
    </div>
    <div id="hamburger-sidebar">
        <div id="hamburger-sidebar-header">
            <h2>ParIciSainté</h2>
            <?php if(isset($_SESSION['user'])) : ?>
                <div id="user-profile">
                    <div id="profile">
                        <p class="user"><?php echo " ".htmlspecialchars($_SESSION['user']['pseudo']); ?></p>
                        <div>
                            <a class="edit-profile" href="/paricisainte/public/edit/profile">éditer</a>
                            <a class="logout" href="/paricisainte/public/logout">Déconnexion</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div id="hamburger-sidebar-body">
        </div>
        <div class="reseaux-sociaux">
            <a href="https://www.facebook.com/Section-Par-Ici-Saint%C3%A9-1541860955869874/" onclick="window.open(this.href); return false;"><i class="fab fa-facebook"></i></a>
            <a href="mailto:philippe.bourgeois@dalkia.fr" class="mail-menu" rel="cc:morePermissions"><i class="fas fa-envelope"></i>Ecrivez-nous</a>
        </div>
    </div>
</div>
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Bienvenue sur mon portfolio où vous retrouverez tout ce qu'il y a à savoir à propos de moi et mes projets !">
        <title>Portfolio - Bastien Mézière</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Coiny&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mina&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="asset/css/style.css">
        <link rel="icon" type="image/ico" href="asset/image/favicon.png">
        <script src="https://www.google.com/recaptcha/api.js?render=6LfN_lYcAAAAABzg1rl1JAlyVfGSbOHqYrMHYAjK"></script>
        <script>
        grecaptcha.ready(function() {
        grecaptcha.execute('6LeOBWIdAAAAACEnhOZKj9RKGA9wEKEalsgOPhZh', {action: 'homepage'}).then(function(token) {
            document.getElementById('recaptchaResponse').value = token
        });
        });
        </script>
    </head>
    <body>
        <!-- Partie Header -->
        <header id="accueil">
            <div class="area" >
                <nav class="navbar navbar-expand-md">
                    <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>-->
                    <div class="collapse navbar-collapse" id="toggleMobileMenu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item"><a href="#accueil" class="txt-nav">Accueil</a></li>
                            <li class="nav-item"><a href="#propos" class="txt-nav">A propos</a></li>
                            <li class="nav-item"><a href="#projets" class="txt-nav">Projets</a></li>
                            <li class="nav-item"><a href="#contact" class="txt-nav">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="codeur" src="asset/image/codeur.png" alt="Image codeur cartoon">
                            <h1 class="context">Bastien Mézière <br>Développeur Web</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
        <!-- Partie A Propos -->
        <section id="propos" class="section-propos">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <h2 class="titresection block_title">A Propos</h2>
                            <div class="col-md-6 col-sm-12 col-xs-12 m-bottom50">
                                <div class="forme-propos">
                                    <img src="asset/image/about_img.svg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="forme-propos2">
                                    <p class="p-propos">Bonjour, je m'appelle Bastien, j'ai 22 ans et je suis développeur web.</p>
                                    <p class="p-propos">Dans la vie je suis une personne organisée et à l'écoute dans tout ce que j'entreprends. Je peux également apporter de nouvelles idées dans différents projets.</p>
                                    <p class="p-propos">J'ai pour projet de faire une licence professionnelle applications web parcours Développeur Web au cours de l'année 2023/2024.</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row txt-center">
                    <div class="col-12 bouton-propos">
                        <button id="btn-comp" class="btn-propos">Compétence</button>
                        <button id="btn-formation" class="btn-propos">Formation</button>
                        <button id="btn-exp" class="btn-propos">Expérience</button>
                    </div>
                </div>
            </div>
            <div id="comp" class="container-fluid section-comp">
                <div class="row table-responsive">
                    <div class="col-4">
                        <h2 class="sous-titre-comp">Langages</h2>
                            <img src="asset/image/html.png" class="img-html" alt="Logo HTML">
                            <img src="asset/image/css.png" class="img-comp" alt="Logo CSS">
                            <img src="asset/image/js.png" class="img-comp" alt="Logo JAVASCRIPT">
                    </div>
                    <div class="col-4">
                        <h2 class="sous-titre-comp">SGBD</h2>
                            <img src="asset/image/mysql.png" class="img-comp" alt="Logo MySQL">
                    </div>
                    <div class="col-4">
                        <h2 class="sous-titre-comp">Autres</h2>
                            <img src="asset/image/git.png" class="img-comp" alt="Logo GIT">
                            <img src="asset/image/seo.png" class="img-comp" alt="Logo SEO">
                            <img src="asset/image/photoshop.png" class="img-comp" alt="Logo Photoshop">
                            <img src="asset/image/bash_linux.png" class="img-comp" alt="Logo Bash Linux">
                    </div>
                    </div>
                </div>
            </div>
            <div id="form" class="container-fluid section-form">
                <div class="row">
                    <div class="col-12">
                        <ul class="liste-formation">
                            <p><img src="asset/image/anssi.png" class="img-exp">MOOC Cybersécurité | Avril 2021<p class="second-texte-exp">En ligne, ANSSI</p></p>
                            <div class="barre-jaune"></div>
                            <p><img src="asset/image/univ_angers.jpg" class="img-exp">Licence pro Logiciels Libres | 2020 - 2021 (Niveau)<p class="second-texte-exp">Faculté des sciences, Angers</p></p>
                            <div class="barre-jaune"></div>
                            <p><img src="asset/image/rousseau.jpg" class="img-exp">BTS SIO option SLAM (Solutions logicielles et applications métiers) | 2018 - 2020<p class="second-texte-exp">Lycée Douanier Rousseau, Laval</p></p>
                            <div class="barre-jaune"></div>
                            <p><img src="asset/image/rousseau.jpg" class="img-exp">Baccalauréat STMG option Mercatique | 2015 - 2018<p class="second-texte-exp">Lycée Douanier Rousseau, Laval</p></p>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="exp" class="container-fluid section-exp">
                <div class="row">
                    <div class="col-12">
                        <ul class="liste-experience">
                            <p><img src="asset/image/helpline.png" class="img-exp">Technicien Support Informatique - HELPLINE Angers | Février à Mai 2022<p class="second-texte-exp">Diagnostique et résolution des problèmes en hot-line</p></p>
                            <div class="barre-jaune"></div>
                            <p><img src="asset/image/logicia.png" class="img-exp">Développeur Web Stagiaire - LOGICIA Informatique Laval | Avril à Juillet 2021<p class="second-texte-exp">Migration de l'espace client de CakePHP 3.6 à 4.2</p></p>
                            <div class="barre-jaune"></div>
                            <p><img src="asset/image/esb.jpg" class="img-exp">Développeur Web Stagiaire - ES Bonchamp TDT | Janvier à Mars 2020<p class="second-texte-exp">Création Site Web en HTML/CSS/PHP/Bootstrap avec BDD</p></p>
                            <div class="barre-jaune"></div>
                            <p><img src="asset/image/howmet.jpg" class="img-exp">Développeur Stagiaire - HOWMET CIRAL Évron | Mai à Juin 2019<p class="second-texte-exp">Modification de formulaires Access en VBA</p></p>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Partie Projets -->
        <section id="projets" class="section-projets">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="titreprojets">Projets</h2>
                    </div>
                    <div class="row m-bottom150 pad-20">
                        <div class="col-md-4 col-sm-6 col-xs-12 card-space">
                            <a href="https://github.com/Bastien-Meziere/ESB-TDT-LOCAL" target="_blank">
                                <div class="card">
                                    <div class="imgBx">
                                        <img src="asset/image/esb.png" alt="Projet Site Web ES Bonchamp Tennis de table">
                                    </div>
                                    <div class="details">
                                        <h2>Site Web ESB TDT</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 card-space">
                            <a href="https://github.com/Bastien-Meziere/BMD-Drive-LOCAL" target="_blank">
                            <div class="card">
                                <div class="imgBx">
                                    <img src="asset/image/bmd.png" alt="Projet Site Web BMD Drive">
                                </div>
                                <div class="details">
                                    <h2>Site Web BMD Drive</h2>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 card-space">
                            <a href="https://github.com/Bastien-Meziere/FastQuiz" target="_blank">
                            <div class="card">
                                <div class="imgBx">
                                    <img src="asset/image/fastquiz.png" alt="Projet vide">
                                </div>
                                <div class="details">
                                    <h2>Appli mobile FastQuiz</h2>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 card-space">
                            <a href="https://github.com/Bastien-Meziere/Jeu-Javascript-1" target="_blank">
                            <div class="card">
                                <div class="imgBx">
                                    <img src="asset/image/jeujs.png" alt="Projet Jeu Javascript #1">
                                </div>
                                <div class="details">
                                    <h2>Jeu Javascript #1</h2>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 card-space">
                            <a href="">
                            <div class="card">
                                <div class="imgBx">
                                    <img src="asset/image/blanc.png" alt="Projet vide">
                                </div>
                                <div class="details">
                                    <h2></h2>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 card-space">
                            <a href="">
                            <div class="card">
                                <div class="imgBx">
                                    <img src="asset/image/blanc.png" alt="Projet vide">
                                </div>
                                <div class="details">
                                    <h2></h2>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Partie Contact -->
        <section id="contact" class="section-contact">
            <div class="container">
                    <h2 class="titresection block_title">Me Contacter</h2>
                    <?php if(array_key_exists('success', $_SESSION)): ?>
                        <div class="alert succes">
                            Votre message a bien été envoyé
                        </div>
                    <?php endif; ?>
                    <form class="row" method="POST" action="mail/contact.php">
                        <div class="col-md-12">
                            <input id="nom" class="form-control input-nom" type="text" placeholder="Nom" required>
                        </div>
                        <div class="col-md-6">
                                <input id="email" class="form-control input-reste" type="text" placeholder="E-Mail" required>
                        </div>
                        <div class="col-md-6">
                                <input id="tel" class="form-control input-reste" type="text" placeholder="Téléphone" required>
                        </div>
                        <div class="col-md-12">
                            <textarea id="message" class="form-control input-reste" placeholder="Message" required></textarea>
                        </div>
                            <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
                        <div class="col-xs-12">
                            <button id="submit" type="submit" class="boutoncontact"><span>Envoyer</span></button>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <p class="phrasecaptcha">Ce site est protégé par reCAPTCHA et la <a class="lien-recaptcha" href="https://policies.google.com/privacy?hl=fr" target="_blank">politique de confidentialité</a> et les <a class="lien-recaptcha" href="https://policies.google.com/terms?hl=fr" target="_blank">conditions d'utilisation</a> de Google s'y appliquent.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Partie Footer -->
    <footer>
        <div class="container-fluid">
            <p class="txt-footer">Bastien Mézière &copy;<script>document.write(new Date().getFullYear());</script> - Tout droits réservés - <a href="https://github.com/Bastien-Meziere" target="_blank" class="btn-github"><i class="fab fa-github fa-3x"></i></a></p>
        </div>
    </footer>
    </div>
    <script src="asset/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
<?php
  unset($_SESSION['success']);
?>
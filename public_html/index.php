<?php


/**
 * Copyright @ 2022
 * Sébastien RONDEAU-CAMEIRA
 * ------------------------
 * https://t.me/SiriusEAEnki
 */

/**
 * ON CHARGE LES DEPENCES
 */
require_once './App/Loader.php';

/**
 * ON CHARGE LE PLUGIN TELEGRAMLOGIN
 */
require_once './App/Telegram/TelegramLogin.php';

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sébastien RONDEAU-CAMEIRA</title>
        <meta name="robots" content="index,follow">
        <meta name="Rating" content="General">
        <meta name="revisit-after" content="1 month">
        <meta name="author" content="Sébastien RONDEAU-CAMEIRA">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <script src="js/script.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#about">Moi</a></li>
                        <li><a href="#skills">Compétences</a></li>
                        <li><a href="#experience">Expérience</a></li>
                        <li><a href="#education">Formations</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#citations">Citations</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="about" class="container-fluid">
            <div class="row">
                <div class="profile-picture">
                    <img src="images/me.jpg" alt="Sébastien" class="img-circle">
                </div>
                <div class="heading">
                    <h1>Sébastien RONDEAU-CAMEIRA</h1>
                    <h3>Développeur Web / DevOps</h3>
                    <a href="docs/cv-sebastien-fr.pdf" class="button">Télécharger le CV</a>
                    <?php

                        if (isset($avatar)) {
                            echo $avatar;
                        }

                        if (isset($htmlTelegramLogin)) {
                            echo $htmlTelegramLogin;
                        }

                    ?>
                </div>
            </div>
        </section>
        <section id="skills">
            <div class="black-divider"></div>
            <div class="heading">
                <h2>Compétences</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <h5>HTML 85%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <h5>CSS 80%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                <h5>JSON 50%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <h5>XML 40%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                <h5>JavaScript 25%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <h5>Java 20%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <h5>PHP 70%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                <h5>MySQL/MariaDB 65%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                <h5>jQuery 45%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                <h5>Bootstrap 35%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <h5>Python 30%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <h5>C# 20%</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experience">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Expérience Professionelle</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>FMC Radio</h3>
                                    <h4>Média-planneur</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2007-2009</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Plannification et mise à l'antenne des médias (musiques, publicités, jingles...).</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Société « Eurêka! »</h3>
                                    <h4>Webmaster</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2001-2007</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Réalisation de différents sites web.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>FMC Radio</h3>
                                    <h4>Assistant Technicien Radio</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2000-2001</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Enregistrement/diffusion des émissions radio.</p>
                                    <p>Technique.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="education">
            <div class="container">
                <div class="black-divider"></div>
                <div class="heading">
                    <h2>Formations</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="education-block">
                            <h5>2013-2014</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>CRP Le Belloy</h3>
                            <h4>Technicien d'Assistance Informatique</h4>
                            <div class="black-divider"></div>
                            <p>Formation et obtention du titre.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="education-block">
                            <h5>2018-2019</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>CRP Mulhouse</h3>
                            <h4>A.B.C. Développement</h4>
                            <div class="black-divider"></div>
                            <p>HTML, CSS, JavaScript, PHP, MySQL, C#, Java.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://spiritualite-quantique.fr" target="_blank">
                            <img src="images/facebook-share.png" alt="spiritualite-quantique.fr">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://sebastien.rondeau-cameira.fr" target="_blank">
                            <img src="images/google-translate.png" alt="sebastien.rondeau-cameira.fr">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://spiritualite-quantique.fr" target="_blank">
                            <img src="images/twitter-video.png" alt="spiritualite-quantique.fr">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://youtube.com" target="_blank">
                            <img src="images/youtube.png" alt="youtube">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://sebastien.rondeau-cameira.fr" target="_blank">
                            <img src="images/twitter-retweet.png" alt="sebastien.rondeau-cameira.fr">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://spiritualite-quantique.fr" target="_blank">
                            <img src="images/facebook-video.png" alt="facebook.com">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="citations">
            <div class="container">
                <div class="black-divider"></div>
                <div class="heading">
                    <h2>Citations Préférées</h2>
                </div>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <h3>«Si tu crois que tu es trop petit pour changer les choses,<br>alors passe une nuit avec un moustique»</h3>
                            <h4>Proverbe africain</h4>
                        </div>
                        <div class="item">
                            <h3>«Si tu crois que tu es trop petit pour changer les choses,<br>alors passe une nuit avec un moustique»</h3>
                            <h4>Proverbe africain</h4>
                        </div>
                        <div class="item">
                            <h3>«Si tu crois que tu es trop petit pour changer les choses,<br>alors passe une nuit avec un moustique»</h3>
                            <h4>Proverbe africain</h4>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Contact</h2>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom *</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Votre Prénom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="lastname">Nom *</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Votre Nom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email *</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Votre adresse Email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="telephone">Téléphone</label>
                                <input type="tel" name="telephone" id="telephone" class="form-control" placeholder="Votre numéro de téléphone">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <p><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button" value="Envoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </section>
        <footer class="text-center">
            <a href="#about">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <h5>
                <a href="https://sebastien.rondeau-cameira.fr/" target="_blank">&copy; 2017-<?php echo date('Y'); ?> Sébastien RONDEAU-CAMEIRA</a>
            </h5>
        </footer>
    </body>
</html>

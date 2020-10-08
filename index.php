<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Cv de Stitch</title>
</head>
<header>
    <nav>
        <a href="#home" class="home"><img src="img/profil.png" alt="Home"></a>
        <div class="nav-nom">
            <h2>Expérience 626</h2>
        </div>

        <div class="menu-items">
            <div class="items" id="menu">
                <a href="#home" class="home-burger"><img src="img/profil.png" alt="Home"></a>
                <a href="#experience">Expériences</a>
                <a href="#skill">Compétences</a>
                <a href="#education">Formation</a>
                <a href="#recommendation">Recommendations</a>
                <a href="#contact" class="contact">Contact</a>
                <a href="#" class="close"><img src="img/close.png" alt="close"></a>
            </div>
            <a class="burger" href="#menu">
                <div></div>
                <div></div>
                <div></div>
            </a>
        </div>
    </nav>

    <div class="headerPart1">
        <div class="profilePicture">
            <img src="img/profil.png" alt="imgProfile" class="imgProfile">
        </div>
        <div class="hibiscusButtons1">
            <figure>
                <a href="experience">
                    <img class="hibiscus1" alt="hibiscus1" src="img/fleur.png">
                </a>
                <figcaption class="nameParts">Expériences</figcaption>
            </figure>
        </div>
        <div class="hibiscusButtons2">
            <figure>
                <a href="professionalSkill">
                    <img class="hibiscus2" alt="hibiscus2" src="img/fleur.png">
                </a>
                <figcaption class="nameParts">Professionnelles</figcaption>
            </figure>
        </div>
    </div>
    <div class="headerPart2">
        <div class="nameOfStitch">
            <figure>
                <a href="training">
                    <img class="hibiscus3" alt="hibiscus3" src="img/fleur.png">
                </a>
                <figcaption class="nameParts">Formation</figcaption>
            </figure>
            <h1 class="h1Name">Expérience-626 "Stitch"</h1>
            <figure>
                <a href="personalSkill">
                    <img class="hibiscus4" alt="hibiscus4" src="img/fleur.png">
                </a>
                <figcaption class="nameParts">Personnelles</figcaption>
            </figure>
        </div>
        <p class="infoContacts">Stitch Pelekai</p>
        <p class="infoContacts">Impasse des hibiscus, Hawaï 96800</p>
        <p class="infoContacts">stitch@edisney.com</p>
        <div class="jobOfStitch">
            <figure>
                <a href="recommendation">
                    <img class="hibiscus5" alt="hibiscus5" src="img/fleur.png">
                </a>
                <figcaption class="nameParts">Recommandations</figcaption>
            </figure>
            <h2 class="h2Job">Professeur de Français</h2>
            <figure>
                <a href="contact">
                    <img class="hibiscus6" alt="hibiscus6" src="img/fleur.png">
                </a>
                <figcaption class="nameParts">Contact</figcaption>
            </figure>
        </div>
    </div>
</header>
<body>
<section class="myJob" id="experience">
    <h2 class="myExperiences">Expériences :</h2>
<?php
include 'experiences.php';
?>
</section>
<section class="competences" id="skill">
    <div class="alignh2">
        <h2 class="h2titleskill"> COMPETENCES </h2>
    </div>

    <div class="alignh3">
        <h3 class="h3titleskill"> PROFESSIONNELLES</h3>
    </div>
    <div class="skill1">
        <div class="skilldetail1"><p class="titreskilldetail"><img class="icone" src="img/drapeau.png"
                                                                   alt="icone drapeau"/> POLYGLOTTE</p>
            <p>Originaire de Tantalogue, maitrise de 20 langues différentes, Stitch est particulièrement qualifié
                pour enseigner les langues.</p>
        </div>

        <div class="skilldetail1"><p class="titreskilldetail"><img class="icone" src="img/noun_Brain_817.png"
                                                                   alt="icone cerveau"/> INTELLIGENCE CYBERNETIQUE </p>
            <p> Avec son esprit aiguisé Stitch est un génie et n'est jamais pris au dépourvu ! Un atout avec des élèves
                !
        </div>
    </div>
    <div class="skill1">
        <div class="skilldetail1"><p class="titreskilldetail"><img class="icone" src="img/oeil.png" alt="icone oeil"/>
                CLAIRVOYANT </p>
            <p> Vision nocturne, rayons X et infrarouge, Stitch sait repérer les friandises et est attentif à
                ce que les élèves manifestent.
        </div>
        <div class="skilldetail1"><p class="titreskilldetail"><img class="icone" src="img/force.png" alt="icone bras"/>
                INVULNERABLE </p>
            <p> Ignifuge et à l'épreuve des balles, Sticth est en mesure de faire face à toutes les , même
                complètement imprévues !</p>
        </div>
    </div>
</section>
<section>
    <div class="divbacgroundcomppers">
        <div class="alignh2">
            <h2 class="h2titleskill"> COMPETENCES</h2>
        </div>

        <div class="alignh3">
            <h3 class="h3titleskill">PERSONNELLES</h3>
        </div>
        <div class="skill1">

            <div class="skilldetail1"><p class="titreskilldetail"><img class="icone" src="img/microoscope2.png"
                                                                       alt="icone microscope"/> MINUTIEUX </p>
                <p>Particulièrement soigneux et précautionneux, Stitch aura à coeur d'assurer la protection physique des
                    élèves.</p>
            </div>
            <div class="skilldetail1"><p class="titreskilldetail"><img class="icone" src="img/arrogant2.png"
                                                                       alt="icone arrogant"/> PRESTANCE </p>
                <p> Mature, réfléchis et disposant d'un calme à toute épreuve, Stitch saura apporter avec patience
                    écoute et soutien.
                </p>
            </div>
        </div>
        <div class="skill1">
            <div class="skilldetail1"><p class="titreskilldetail"><img class="icone" src="img/vaisseau.png"
                                                                       alt="icone vaisseau spatial"/> RELATIVISE</p>
                <p> Grâce à sa participation à des projets d'envergure, Stitch saura prendre du recul sur des sujets de
                    fonds</p>
            </div>
            <div class="skilldetail1"><p class="titreskilldetail"><img class="icone" src="img/equipe2.png"
                                                                       alt="icone equipe"/> COLLABORATIF </p>
                <p> Stitch apprécie tout particulièrement les collaborations actives, Lilo pourra vous fournir toutes
                    recommandations utiles</p>
            </div>

        </div>
    </div>
</section>

<div class="alignh2">
    <h2 class="h2titleskill"> DIPLOMES </h2>
</div>
<section class="Diplomes" id="diploma">
    <?php
    include 'diplome.php';
    ?>
</section>
<section>
    <h2>Mes recommendations : </h2>
    <figure class="reference">
        <img src="https://vignette.wikia.nocookie.net/disney/images/3/3d/Profile_-_Jumba.jpg/revision/latest/scale-to-width-down/515?cb=20190312074022"
             alt="Jumba Jookiba">
        <figcaption>Ma plus belle création, je lui fait confiance</figcaption>
    </figure>
    <figure class="reference">
        <img src="https://vignette.wikia.nocookie.net/disney/images/1/1f/Profile_-_Lilo.png/revision/latest?cb=20190312072611"
             alt="Lilo Pelekai">
        <figcaption>J'ai vécue de belles expériences avec lui</figcaption>
    </figure>
    <figure class="reference">
        <img src="https://vignette.wikia.nocookie.net/disney/images/9/9f/Profile_-_Grand_Councilwoman.jpeg/revision/latest/scale-to-width-down/516?cb=20190321135914"
             alt="Grande conseillère">
        <figcaption>Je n'aime pas crimnel... Stitch a changé</figcaption>
    </figure>
    <figure class="reference">
        <img src="https://www.animationsource.org/sites_content/lilo_stitch/upload/fanchars/pic_detail579e774ccb536.png"
             alt="Reuben">
        <figcaption>J'étais trop occuper à manger mais stitch est plutôt compétent</figcaption>
    </figure>

</section>

<section class="contact" id=contact">
<?php
include 'form.php';
?>
</section>

<footer>
    <div class=quote>
        <p class="Ohana">"OHANA" signifie "FAMILLE".</p>
        <p class="family">Famille signifie que personne ne doit être abandonné, ni oublié.</p>
    </div>
    <div class="logo">
        <li><a href="https://www.facebook.com/StichOfficia/" class="fab fa-facebook-f fa-2x"></a></li>
        <li><a href="https://twitter.com/hashtag/InternationalStitchDay?src=hashtag_click" class="fab fa-twitter fa-2x"></a></li>
        <li><a href="https://www.instagram.com/stitch_disney626/?hl=fr" class="fab fa-instagram fa-2x"></a></li>
        <li><a href="https://fr.linkedin.com/" class="fab fa-linkedin-in fa-2x"></a></li>
    </div>
</footer>
</body>
</html>

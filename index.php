<?php require_once('includes/header.php'); ?>

<section id="hero" class="borderBas">
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <h1 class="py-4 titrePrincipal text-white"><span class="textColor9">Regardez,</span></br>apprenez,</br>intéragissez.</h1>
                <p class="text-white">Onlive est une plateforme dédiée à la conférence interacrtive </br>où chacun peut gratuitement découvrir, apprendre,</br>et se perfectionner dans le domaine des nouvelles technologies.</p>
            </div>
        </div>
    </div>
</section>

<section id="nextWebinaire" class="bg-light paddingSection">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <p class="pb-3 textColor2"><span class="textColor1 titre3">Prochain live </span> dans 3 heures</p>
                <img class="mb-3 img-fluid imageProchainLive" src="images/article-en-avant.jpg" alt="">
            </div>
            <div class="col-md-6">
                <div class="pb-4 d-inline-flex">
                    <img class="img-fluid rounded-circle" src="images/auteur.jpg" alt="">
                    <div class="pl-2">
                        <p class="textColor3 font-weight-bold">Louis Chevant</p>
                        <p class="textColor2">Fondateur de SmartKeyword</p>
                    </div>
                </div>
                <h2 class="titre2 textColor1">SEO: préparer son site pour mieux rebondir post-Covid</h2>
                <p class="py-4 textColor16">Top stratégies de contenu : les fondamentaux et les quick wins à mettre en place dès aujourd'hui. Louis Chevant, fondateur de SmartKeyword, spécialiste en référencement Google pour le e-commerçants et marketplaces.</p>
                <div>
                    <button type="button" class="btn btn-primary petitBouton">Réserver ma place</button>
                    <button type="button" class="ml-3 btn btn-secondary petitBouton">Ajouter à mon agenda</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="avenir" class="paddingSection">
    <div class="container-lg">
        <h2 class="text-center titre4 textColor4">Lives à venir</h2>
        <div class="row justify-content-center">
            <div class="d-flex flex-wrap pt-3 pb-5 btn-group textColor5" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light">Tous</button>
                <button type="button" class="btn btn-light">Impression 3D</button>
                <button type="button" class="btn btn-light">Technologies</button>
                <button type="button" class="btn btn-light">SEO</button>
                <button type="button" class="btn btn-light">Développement</button>
                <button type="button" class="btn btn-light">Gaming</button>
            </div>
        </div>
        <div class="row pb-xl-5">
            <?php for ($i = 1; $i <= 8; $i++) { ?>
                <div class="mb-5 col-md-4 col-xl-3">
                    <div class="card">
                        <img src="images/article<?= $i ?>.jpg" class="pb-3 card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 carteDate text-uppercase textColor6">mardi 31 mars à 10h00</h6>
                            <h5 class="card-title carteTitre textColor7">Vous allez rater la refonte SEO de votre site, et voilà pourquoi !</h5>
                            <p class="card-text textColor5">Aucune solution pour créer des sites web n'est 100% SEO compliant nativement : les besoins des annonceurs sont souvent focalisés sur l'utilisateur.</p>
                            <a href="#" class="btn btn-primary rounded-pill btn-sm tagCategorie">SEO</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row justify-content-center">
            <button type="button" class="mb-4 my-md-4 grandBouton center-block btn btn-primary">Charger plus de lives</button>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <p class="text-center textColor8 messageAvenir">Vous avez raté un live ? Pas de problème !</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <p class="text-center textColor8 messageAvenir">Retrouvez toutes les conférences passées sur la page <a class="text-decoration-none textColor9 lienGras" href="#">Onlive Replay</a></p>

            </div>
        </div>
    </div>
</section>

<section id="newsletter" class="paddingSection">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7 pl-md-4 pr-md-5 text-white">
                <h4 class="titre6 pb-3">Prenez un siège...</h4>
                <h3 class="titre5 pb-4">Et ne manquez plus aucun <span class="textColor9">live !</span></h3>
                <p class="textColor11">Nous vous tiendrons informé des dernières conférences.</br>Ayez le temps de vous incrire à vos lives préférés et de parler aux conférenciers.</p>
                <form>
                    <div class="form-group">
                        <input type="email" class="text-white form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse email">
                    </div>
                    <button type="submit" class="d-block d-md-inline mx-auto btn btn-primary">Je m'inscris</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="messageInfo" class="paddingSection borderBas">
    <div class="container-fluid">
        <div class="row justify-content-center flex-column align-items-center">
            <div class="col-12">
                <div>
                    <h2 class="pastilleRouge titre4 textColor13 text-center">On live</h2>
                </div>
                <p class=" textInfo textColor8 text-center">Travailler ensemble, se connecter et apprendre librement : tels sont les maîtres-mots de</br>On Live. On Live est une plateforme regroupant les meilleurs webinars du web
                    </br>concernant les nouvelles technologies.
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once('includes/footer.php'); ?>
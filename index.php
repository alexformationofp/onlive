<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="scss/style.css">
    <title>Online On live | Accueil</title>
</head>

<body>
    <section id="hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="font-weight-bold text-white"><span class="rose">Regardez,</span></br>apprenez,</br>intéragissez.</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-white py-5">Onlive est une plateforme dédiée à la conférence interacrtive où chacun peut gratuitement découvrir, apprendre, et se perfectionner dans le domaine des nouvelles technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="nextWebinaire" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5">
                    <p class="font-weight-bold">Prochain live : <span class="font-weight-normal">dans 3 heures</span></p>
                    <img class="img-fluid" src="images/article-en-avant.jpg" alt="">
                </div>
                <div class="col-md-5">
                    <div class="d-inline-flex">
                        <img class="img-fluid rounded-circle" src="images/auteur.jpg" alt="">
                        <div class="pl-2">
                            <p class="font-weight-bold">Louis Chevant</p>
                            <p>Fondateur de SmartKeyword</p>
                        </div>
                    </div>
                    <h2>SEO: préparer son site pour mieux rebondir post-Covid</h2>
                    <p>Top stratégies de contenu : les fondamentaux et les quick wins à mettre en place dès aujourd'hui. Louis Chevant, fondateur de SmartKeyword, spécialiste en référencement Google pour le e-commerçants et marketplaces.</p>
                    <button type="button" class="btn btn-primary">Réserver ma place</button>
                    <button type="button" class="btn btn-secondary">Ajouter à mon agenda</button>
                </div>
            </div>
        </div>
    </section>
    <section id="avenir" class="py-5">
        <div class="container">
            <h2 class="text-center">Lives à venir</h2>
            <div class="row justify-content-center">
                <div class="py-5 btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-light">Tous</button>
                    <button type="button" class="btn btn-light">Impression 3D</button>
                    <button type="button" class="btn btn-light">Technologies</button>
                    <button type="button" class="btn btn-light">SEO</button>
                    <button type="button" class="btn btn-light">Développement</button>
                    <button type="button" class="btn btn-light">Gaming</button>
                </div>
            </div>
            <div class="row">
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <div class="col-md-3 mb-5">
                        <div class="card">
                            <img src="images/article1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">mardi 31 mars à 10h00</h6>
                                <h5 class="card-title">Vous allez rater la refonte SEO de votre site, et voilà pourquoi !</h5>
                                <p class="card-text">Aucune solution pour créer des sites web n'est 100% SEO compliant nativement : les besoins des annonceurs sont souvent focalisés sur l'utilisateur.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row justify-content-center">
                <button type="button" class="center-block btn btn-primary">Charger plus de lives</button>
            </div>
            <div class="row justify-content-center">
                <p>Vous avez raté un live ? Pas de problème !</p>
            </div>
            <div class="row justify-content-center">
                <p>Retrouvez toutes les conférences passées sur la page <a href="#">Onlive Replay</a></p>
            </div>
        </div>
    </section>
    <section id="newsletter" class="py-5">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-1"></div>
                <div class="col-md-4 pl-4 text-white">
                    <h4>Prenez un siège...</h4>
                    <h3>Et ne manquez plus aucun <span class="rose">live !</span></h3>
                    <p>Nous vous tiendrons informé des dernières conférences.</br>Ayez le temps de vous incrire à vos lives préférés et de parler aux conférenciers.</p>
                    <form>
                        <div class="form-group">

                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse email">
                        </div>
                        <button type="submit" class="btn btn-primary">Je m'inscris</button>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

    </section>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>

</html>
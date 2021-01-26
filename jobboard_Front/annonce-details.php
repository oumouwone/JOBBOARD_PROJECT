<?php
$curl = curl_init();

//Méthode pour communiquer avec un API
curl_setopt_array($curl, array(
CURLOPT_URL => "http://localhost:8888/T-WEB-501-PAR-5-1-jobboard-oumahane-saoudatou.wone/php_jobboard_api/App/crud_annonces/get-annonce-by-id.php?id=".$_GET['id'],
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// Get pour recuperer les données , POST pour sauver / DELETE pour supprimer / PUT pour modifier
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_POSTFIELDS => "",
CURLOPT_HTTPHEADER => array(
"Content-Type: application/json",
"cache-control: no-cache"
),
));

//Cette réponse est au format JSON
$response = curl_exec($curl);
$err = curl_error($curl);

//Pour pouvoir bien manipuler ,il faut que l'on decode le json
$data_annonce = json_decode($response, true);
$annonce_array = $data_annonce['annonce'];
//print_r($annonce_array);

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./css/style-annonce.css">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
  <!--Header started here-->
  <header>
    <!--Navbar started here-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand text-info" href="index.php">
        <img src="./images/logo_jobboard.png" width="70" height="50" alt="" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="liste-entreprise.php">Découvrir les entreprises </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="job-list.php">Trouver un job </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a class="nav-link active mr-sm-2 text-info" href="register.php">Connexion</a>
          <a class="btn btn-outline-info btn-bg rounded-pill my-2 my-sm-0" href="job-form.php">Poster un job</a>
        </form>
      </div>
    </nav>
    <!--END HERE-->
  </header>
  <!--End here-->

  <!--Main-->
  <main>
    <section class="container" style="margin-top: 5%; background-color:#fafefe">
      <div class="team-single">
        <div class="row">
          <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
            <div class="team-single-img">
              <img src="./images/logo_epitech.png" alt="">
            </div>
            <div class="bg-light-info padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
              <h4 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600"><?= $annonce_array['name_entreprise']?></h4>
              <p class="sm-width-95 sm-margin-auto"><?= $annonce_array['desc_entreprise']?> </p>
              <a class="btn btn-outline-secondary btn-block" href="entreprise-details.html">Découvrir l'entreprise</a>
            </div>
          </div>

          <div class="col-lg-8 col-md-7">
            <div class="team-single-text padding-50px-left sm-no-padding-left">
              <h4 class="font-size38 sm-font-size32 xs-font-size30"><?= $annonce_array['poste']?></h4>
              <p class="no-margin-bottom"><?= $annonce_array['description']?></p>
              <p>Publié le : <strong><?= $annonce_array['date_offre']?></strong></p><br>
              <div class="contact-info-section margin-40px-tb">
                <ul class="list-style9 no-margin">
                  <li>
                    <div class="row">
                      <div class="col-md-5 col-5">
                        <i class="fas fa-brain text-orange"></i>
                        <strong class="margin-10px-left text-orange">Connaissances Techniques:</strong>
                      </div>
                      <div class="col-md-7 col-7">
                        <p><?= $annonce_array['connaissance_technique']?></p>
                      </div>
                    </div>

                  </li>
                  <li>

                    <div class="row">
                      <div class="col-md-5 col-5">
                        <i class="far fa-gem text-info"></i>
                        <strong class="margin-10px-left text-info">Expériences:</strong>
                      </div>
                      <div class="col-md-7 col-7">
                        <p><?= $annonce_array['experience']?></p>
                      </div>
                    </div>

                  </li>
                  <li>

                    <div class="row">
                      <div class="col-md-5 col-5">
                        <i class="far fa-clock text-lightred"></i>
                        <strong class="margin-10px-left text-lightred">Date début candidature</strong>
                      </div>
                      <div class="col-md-7 col-7">
                        <p><strong><?= $annonce_array['date_debut_cand']?></strong></p>
                      </div>
                    </div>

                  </li>
                  <li>

                    <div class="row">
                      <div class="col-md-5 col-5">
                        <i class="fas fa-clock text-green"></i>
                        <strong class="margin-10px-left text-green">Date Limite candidature</strong>
                      </div>
                      <div class="col-md-7 col-7">
                        <p><strong><?= $annonce_array['date_limit_cand']?></strong></p>
                      </div>
                    </div>

                  </li>
                  <li>

                    <div class="row">
                      <div class="col-md-5 col-5">
                        <i class="fas fa-map-marker-alt text-purple"></i>
                        <strong class="margin-10px-left text-purple">Adresse:</strong>
                      </div>
                      <div class="col-md-7 col-7">
                        <p><?= $annonce_array['adress']?></p>
                      </div>
                    </div>

                  </li>
                  <li>

                    <div class="row">
                      <div class="col-md-5 col-5">
                        <i class="fas fa-file-contract text-dark"></i>
                        <strong class="margin-10px-left xs-margin-four-left text-dark">Type contrat:</strong>
                      </div>
                      <div class="col-md-7 col-7">
                        <p><?= $annonce_array['type_contrat']?></p>
                      </div>
                    </div>

                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-5 col-5">
                        <i class="fas fa-envelope text-pink"></i>
                        <strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
                      </div>
                      <div class="col-md-7 col-7">
                        <p><?= $annonce_array['email']?></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#exampleModal">postuler</button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Postuler à l'annonce</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <!--Avatar -->
              <div class="col-sm-4 col-xs-12 avatar">
                <img src="./images/logo_jobboard.png" class="img-thumbnail" alt="" />
              </div>
              <!-- End Avatar -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item h4 text-info"><i class="fas fa-users text-dark"></i> Sophie LaRose</li>
                <li class="list-group-item h4 text-info"><i class="fas fa-address-card text-dark"></i> Etudiant</li>
                <li class="list-group-item h4 text-info"><i class="fas fa-location-arrow text-dark"></i> France</li>
                <li class="list-group-item h4 text-info"><i class="fas fa-street-view text-dark"></i> Paris</li>
                <li class="list-group-item h4 text-info"><i class="fas fa-at text-dark"></i> sophilarose@gmail.com</li>
                <li class="list-group-item h4 text-info"><i class="fas fa-mobile-alt text-dark"></i> +330978568</li>
                <li class="list-group-item h4 text-info"><i class="fab fa-linkedin text-dark"></i>
                  https://fontawesome.com/linkedin</li>
                <li class="list-group-item h4 text-info"><i class="fab fa-twitter-square text-dark"></i>
                  https://fontawesome.com/linkedin</li>
                <li class="list-group-item h4 text-info"><i class="fab fa-github-square text-dark"></i>
                  https://fontawesome.com/linkedin</li>
                <li class="list-group-item h4 text-info"><i class="far fa-file-alt text-dark"></i> Mon CV<a class="btn btn-outline-danger btn-sm badge-pill float-right" href="#">Voir</a></li>
                <li class="list-group-item h4 text-info"><a href="profil-postulant.html" class="btn btn-outline-secondary badge-pill">Modifier mon profil</a></li>
              </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                      <button type="button" class="btn btn-primary">Postuler</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>


        </div>
      </div>
      </div>

    </section>
  </main>































  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>










<footer class="bg-dark text-white">
  <div class="container py-3">
    <div class="row">
      <div class="col-lg-3 col-sm-6 pb-2">
        <img src="./images/logo_jobboard.png" class="" alt="...">
      </div>
      <div class="col-lg-3 col-sm-6 pb-2">
        <h4> Jobboard</h4>
        <ul class="list-unstyled">
          <li><a href="">Accueil</a></li>
          <li><a href="">Découvrir les entreprises</a></li>
          <li><a href="">Trouver un job</a></li>
          <li><a href="">Connexion</a></li>
          <li><a href="">Poster un job</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-sm-6 pb-2">
        <h4>Contact</h4>
        <p>
        <address>24 Rue Pasteur, 94270 Le Kremlin-Bicêtre</address>
        <strong>Numero Tel:</strong> 01 44 08 01 01<br>
        <strong>Email:</strong> <a href="mailto:jobboard@jobboard.com">jobboard@jobboard.com</a>
        </p>
      </div>

      <div class="col-lg-3 col-sm-6 pb-2">
        <h4>Newsletters</h4>
        <p>Entrez votre email ici :</p>
        <div class="input-group">
          <input type="email" name="" class="form-control">
          <div class="input-group-append">
            <button class="btn btn-secondary">Souscrire</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluid text-white text-center bg-info py-2">
    © Copyright October 2020~ Tous droits réservés ~SOW&WONE ©
  </div>










</footer>

</html>
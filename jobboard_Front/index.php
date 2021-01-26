<?php
$curl = curl_init();

//Méthode pour communiquer avec un API
curl_setopt_array($curl, array(
CURLOPT_URL => "http://localhost:8888/T-WEB-501-PAR-5-1-jobboard-oumahane-saoudatou.wone/php_jobboard_api/App/crud_annonces/get-annonces.php",
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
// print_r($data_annonce)


$curl1 = curl_init();

//Méthode pour communiquer avec un API
curl_setopt_array($curl1, array(
CURLOPT_URL => "http://localhost:8888/T-WEB-501-PAR-5-1-jobboard-oumahane-saoudatou.wone/php_jobboard_api/App/crud_entreprises/get-entreprises.php",
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
$response = curl_exec($curl1);
$err = curl_error($curl1);

//Pour pouvoir bien manipuler ,il faut que l'on decode le json
$data_entreprise = json_decode($response, true);
$entreprise_array = $data_entreprise['entreprise'];
// print_r($data_annonce)


?>








<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
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
    <!--section advertissements-->
    <section>
      <div class="container-fluid text-center">
        <h1 class="text-info">Découvrez nos offres d'emplois <br>ou de stages</h1>
        <div class="container">
          <div class="row">
          <?php 
          //C'est pour itérer dans le tableau de données/ $data_annonce (array) et $item (value)
        foreach ($annonce_array as $item){
        ?>
            <div class="col-4">
              <div class="card text-center" style="width: 18rem;">
                <img class="card-img-top" src="./images/logo_epitech.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?= $item['poste'] ?></h5>
                  <p class="card-text"><?= $item['description'] ?></p>
                  <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#demo<?= $item['id'] ?>">Plus
                    d'infos</button> <hr>
                  <div id="demo<?= $item['id'] ?>" class="collapse">
                    <div class="row">
                      <div class="col-md-12">
                        <i class="fas fa-brain text-info"></i>
                        <strong class="margin-10px-left text-info">Connaissances Techniques</strong>
                        <p><?= $item['connaissance_technique'] ?></p>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <i class="far fa-gem text-info"></i>
                        <strong class="margin-10px-left text-info">Expériences</strong>
                        <p><?= $item['experience'] ?></p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <i class="far fa-clock text-info"></i>
                        <strong class="margin-10px-left text-info">Date début candidature</strong>
                        <p><strong><?= $item['date_debut_cand'] ?></strong></p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <i class="fas fa-clock text-info"></i>
                        <strong class="margin-10px-left text-info">Date Limite candidature</strong>
                        <p><strong><?= $item['date_limit_cand'] ?></strong></p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <i class="fas fa-map-marker-alt text-info"></i>
                        <strong class="margin-10px-left text-info">Adresse</strong>
                        <p><?= $item['adress'] ?></p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <i class="fas fa-file-contract text-info"></i>
                        <strong class="margin-10px-left xs-margin-four-left text-info">Type contrat</strong>
                        <p><?= $item['type_contrat'] ?></p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <i class="fas fa-envelope text-info"></i>
                        <strong class="margin-10px-left xs-margin-four-left text-info">Email</strong>
                        <p><?= $item['email'] ?></p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <a href="annonce-details.php?id=<?=$item['id']?>" class="btn btn-outline-danger">Postuler</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>    
            <?php } ?>
          </div>
        </div>
      </div>
     

    </section>
    <!--End advertissements section-->

    <!--parallax section-->
    <section>
      <div class="container-fluid">
        <div class="parallax">
          <div class="row">

          </div>
        </div>
      </div>

    </section>
    <!--End parallax section-->

    <!--Entreprise section-->
    <section>
      <div class="container-fluid text-center">
        <h1 class="text-info">Découvrez nos entreprises partenaires </h1>
        <div class="container">
        <div class="row">
              <!-- Start -->
              <?php 
                //C'est pour itérer dans le tableau de données/ $data_annonce (array) et $item (value)
                foreach ($entreprise_array as $item){
              ?>
              <div class="col-4">
                <div class="card text-center" style="width: 18rem;">
                  <img class="card-img-top" src="./images/logo_epitech.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?= $item['name_entreprise'] ?></h5><br>
                    <a href="entreprise-details.php?id=<?=$item['id']?>" class="btn btn-outline-info">Découvrir</a>
                  </div>
                </div>
              </div>

              <?php } ?>
               <!-- End -->
              </div>
            </div>
        </div>

      </div>
    </section>
    <!--End entreprise-->
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
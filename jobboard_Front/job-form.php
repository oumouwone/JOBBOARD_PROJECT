<?php
if (!empty($_POST)) {
 
  $poste = $_POST['poste'];
  $description = $_POST['description'];
  $connaissance_technique = $_POST['connaissance_technique'];
  $type_contrat = $_POST['type_contrat'];
  $date_debut_cand = $_POST['date_debut_cand'];
  $date_limit_cand = $_POST['date_limit_cand'];
  $adress = $_POST['adress'];
  $experience = $_POST['experience'];
  $id_entreprise = 1;
 
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, "http://localhost:8888/T-WEB-501-PAR-5-1-jobboard-oumahane-saoudatou.wone/php_jobboard_api/App/crud_annonces/add_annonce.php");
  curl_setopt($curl, CURLOPT_POST, 1);
  $data = json_encode( array( "poste"=> $poste,"description"=> $description,"connaissance_technique"=> $connaissance_technique,"type_contrat"=> $type_contrat,"date_debut_cand"=> $date_debut_cand,"date_limit_cand"=> $date_limit_cand,"adress"=> $adress,"experience"=> $experience,"id_entreprise"=> $id_entreprise ) );
  curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );
  curl_setopt( $curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $server_output = curl_exec($curl);
  curl_close($curl);
}
 
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
  <!--Header started here-->
  <header>
    <!--Navbar started here-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand text-info" href="index.php">
        <img src="./images/logo_jobboard.png" width="70" height="50" alt="" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link active mr-sm-2 text-info invisible" href="register.php">Connexion</a>
          <a class="nav-link active mr-sm-2 text-info" href="profil-annonceur.php">Profil</a>
          <a class="btn btn-outline-info btn-bg rounded-pill my-2 my-sm-0" href="job-form.php">Poster un job</a>
        </form>
      </div>
    </nav>
    <!--END HERE-->
  </header>
  <!--End here-->

  <!--Main-->
  <main>
    <section class="container" style="margin-top: 5%; background-color:#fafefe;">
      <h1 class="h1 text-dark text-center">Renseignez les détails du job</h1>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link text-info h5" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">OFFRE</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <form action="job-form.php" method="POST">
          <div class="tab-pane show active fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="exampleInputNom1" class="h4 text-dark">Intitulé Poste</label>
                  <input type="text" name="poste" class="form-control" id="exampleInputNom1" aria-describedby="emailHelp" placeholder="Dev Web" required>
                </div>

              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label for="exampleInputNom1" class="h4 text-dark">Description</label>
                  <textarea type="text" name="description" class="form-control" id="exampleInputNom1" aria-describedby="emailHelp" placeholder="Description poste" rows="3" required></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="exampleInputNom1" class="h4 text-dark">Connaissances Techniques</label>
                  <textarea type="text" name="connaissance_technique" class="form-control" id="exampleInputNom1" aria-describedby="emailHelp" placeholder="Description poste" rows="3" required></textarea>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="exampleInputNom1" class="h4 text-dark">Type contrat</label>
                  <input type="texte" name="type_contrat" class="form-control" id="exampleInputNom1" aria-describedby="emailHelp" placeholder="CDD/CDI/STAGE">
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleInputNom1" class="h4 text-dark">Date début candidature</label>
                <input type="date" name="date_debut_cand" class="form-control" id="exampleInputNom1" aria-describedby="emailHelp" placeholder="12345">
              </div>

            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleInputNom1" class="h4 text-dark">Date limite candidature</label>
                <input type="date" name="date_limit_cand" class="form-control" id="exampleInputNom1" aria-describedby="emailHelp" placeholder="CDD/CDI/STAGE">
              </div>


            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="exampleInputEmail1" class="h4 text-dark">Adresse</label>
                <input type="text" name="adress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Paris" required>
              </div>

            </div>

            <div class="col-lg-12">
              <div class="form-group">
                <label for="exampleInputPassword1" class="h4 text-dark">Expériences</label>
                <input type="text" name="experience" class="form-control" id="exampleInputPassword1" placeholder="X456@lnm" required>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <button type="submit" name='submitForm' class="btn btn-info btn-lg btn-block">Poster</button>
              </div>
            </div>
          </div>

      </div>
      </form>
      </div>




    </section>
  </main>































  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
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
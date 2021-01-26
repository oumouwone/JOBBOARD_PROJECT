<?php
if (!empty($_POST)) {



    $password = $_POST['password'];
    $email = $_POST['email'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://127.1.1.1/php_jobboard_api/App/connect.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    $data = json_encode( array( "first_name"=> $first_name,"last_name"=> $last_name,"password"=> $password,"email"=> $email,"type_user"=> $type_user) );
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
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Jobboard</title>
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

<section class="container" style="margin-top: 5%; background-color:#fafefe;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-5">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Connexion</h1>
                            <p class="text-muted">Connectez-vous à votre compte</p>
                            <form action="register.php" method="POST">
                                <div class="form-group mb-3">
                                    <label for="exampleInputNom1" class="h4 text-dark">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputNom1" aria-describedby="emailHelp"placeholder="email@email.com"required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputNom1" class="h4 text-dark">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-outline-info btn-block px-4">Se connecter</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-info py-5 d-md-down-none" style="width:44%;">
                    <div class="card-body text-center">
                        <div>
                            <h2>Bienvenue sur JOBBOARD</h2>
                            <br>
                            <br>
                            <p>Rejoins notre équipe !</p>
                            <a href="signup.html" class="btn btn-info active mt-3">S'inscrire </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>


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
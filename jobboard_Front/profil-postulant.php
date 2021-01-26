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
    </nav>    <!--END HERE-->
  </header>
  <!--End here-->

  <!--Main-->
  <main>
    <section class="container" style="margin-top: 5%; background-color:#fafefe">
      <div class="row">
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
              href="#list-home" role="tab" aria-controls="home">Mes informations</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
              href="#list-profile" role="tab" aria-controls="profile">Profil</a>
            <a class="list-group-item list-group-item-action" id="list-candidatures-list" data-toggle="list"
              href="#list-candidatures" role="tab" aria-controls="candidatures">Candidatures</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
              href="#list-settings" role="tab" aria-controls="settings">Paramètres</a>
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
              <!--Avatar -->
              <div class="col-sm-4 col-xs-12 avatar">
                <img src="./images/portrait.jpg" class="img-thumbnail" alt="" />
              </div>
              <!-- End Avatar -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item h4 text-info"><i class="fas fa-users text-dark"></i> Josianne Lareine</li>
                <li class="list-group-item h4 text-info"><i class="fas fa-address-card text-dark"></i> Etudiante</li>
                <li class="list-group-item h4 text-info"><i class="fas fa-street-view text-dark"></i> Paris France</li>
                <li class="list-group-item h4 text-info"><i class="fas fa-at text-dark"></i> Josiannelarein@gmail.com</li>
                <li class="list-group-item h4 text-info"><i class="far fa-file-alt text-dark"></i> https://upload/file/monCV<a class="btn btn-outline-danger btn-sm badge-pill float-right" href="#">Voir</a></li>
                <li class="list-group-item h4 text-info"><i class="fas fa-location-arrow text-dark"></i> Saint-Ouen</li>
                <li class="list-group-item h4 text-info"><i class="fab fa-linkedin text-dark"></i>
                  https://fontawesome.com/icons/linkedin</li>
                <li class="list-group-item h4 text-info"><i class="fab fa-twitter-square text-dark"></i>
                  https://fontawesome.com/icons/linkedin</li>
                <li class="list-group-item h4 text-info"><i class="fab fa-github-square text-dark"></i>
                  https://fontawesome.com/icons/linkedin</li>

              </ul>
            </div>













            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

              <div class="container py-2">
                <div class="row my-2">
                  <div class="col-lg-8 order-lg-1 personal-info">
                    <form role="form">
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Civilité</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="Mme/M." />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="Larose" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Prénom (s)</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="Sophie" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Date Naissance</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="date" value="" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="email" value="email@gmail.com" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Numéro Téléphone</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="+330654356789" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Poste</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="Directeur RH" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Mon CV</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="file" value="" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Type contrat</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="CDD/CDI/STAGE" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Pays</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="" placeholder="Pays" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Adresse</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="" placeholder="Rue" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-6">
                          <input class="form-control" type="text" value="" placeholder="Ville" />
                        </div>
                        <div class="col-lg-3">
                          <input class="form-control" type="text" value="" placeholder="Code postal" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Linkedin</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="https://fontawesome.com/icons/linkedin" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Twitter</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="https://fontawesome.com/icons/linkedin" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Github</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="https://fontawesome.com/icons/linkedin" />
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-lg-9 ml-auto text-right">
                          <input type="button" class="btn btn-outline-danger btn-block" value="Enregistrer" />
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-lg-4 order-lg-0 text-center">
                    <img src="./images/portrait.jpg" class="img-thumbnail" alt="" />
                    <h6 class="my-4">Télécharger photo profil</h6>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-upload"></i></span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01"></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>















           




























            <div class="tab-pane fade" id="list-candidatures" role="tabpanel" aria-labelledby="list-candidatures-list">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Intitulé Poste</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                      <a href="annonce-details.html" class="btn btn-outline-primary"><i class="fas fa-search"></i></a>
                      <button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalSupp"><i
                          class="fas fa-trash-alt"></i></button>
                      <!-- Modal supprimer -->
                      <div class="modal fade" id="modalSupp" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Annonce</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Voulez‑vous vraiment supprimer cette annonce ?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                              <button type="button" class="btn btn-danger">Supprimer</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal supprimer -->                   
                     </td>

                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                      <a href="annonce-details.html" class="btn btn-outline-primary"><i class="fas fa-search"></i></a>
                      <button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalSupp"><i
                          class="fas fa-trash-alt"></i></button>
                      <!-- Modal supprimer -->
                      <div class="modal fade" id="modalSupp" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Annonce</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Voulez‑vous vraiment supprimer cette annonce ?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                              <button type="button" class="btn btn-danger">Supprimer</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal supprimer -->                   
                     </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>
                    <a href="annonce-details.html" class="btn btn-outline-primary"><i class="fas fa-search"></i></a>
                    <button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalSupp"><i
                        class="fas fa-trash-alt"></i></button>
                    <!-- Modal supprimer -->
                    <div class="modal fade" id="modalSupp" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Annonce</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Voulez‑vous vraiment supprimer cette annonce ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-danger">Supprimer</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal supprimer -->                   
                   </td>
                  </tr>

                </tbody>
              </table>             
            </div>























            







            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
              <div class="container py-2">
                <div class="row my-2">
                  <!-- edit form column -->
                  <div class="col-lg-8 order-lg-1 personal-info">
                    <form role="form">
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Civilité</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="Mme/M." />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="Larose" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Prénom (s)</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="Sophie" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Date Naissance</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="date" value="" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="email" value="email@gmail.com" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Numéro Téléphone</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="+330654356789" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Poste</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="Directeur RH" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Mon CV</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="file" value="" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Type contrat</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="CDD/CDI/STAGE" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Pays</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="" placeholder="Pays" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Adresse</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="" placeholder="Rue" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-6">
                          <input class="form-control" type="text" value="" placeholder="Ville" />
                        </div>
                        <div class="col-lg-3">
                          <input class="form-control" type="text" value="" placeholder="Code postal" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Linkedin</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="https://fontawesome.com/icons/linkedin" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Twitter</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="https://fontawesome.com/icons/linkedin" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Github</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" value="https://fontawesome.com/icons/linkedin" />
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-lg-9 ml-auto text-right">
                          <input type="reset" class="btn btn-outline-secondary" value="Annuler" />
                          <input type="button" class="btn btn-outline-info" value="Enregistrer modifications" />
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-lg-4 order-lg-0 text-center">
                    <img src="./images/portrait.jpg" class="img-thumbnail" alt="" />
                    <h6 class="my-4">Télécharger nouvelle photo</h6>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-upload"></i></span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01"></label>
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
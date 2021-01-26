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
        <section class="container" style="margin-top: 5%; background-color:#fafefe">
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                            href="#list-home" role="tab" aria-controls="home">Espace Administrateur</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                            aria-labelledby="list-home-list">
                            <h1 class="text-center h1 text-dark">Gestion utilisateurs</h1>
                            <table class="table">
                                <button class="btn btn-outline-success badge-pill float-right m-3" data-toggle="modal"
                                    data-target="#exampleModal"><i class="fas fa-plus-square"></i> Ajouter
                                    utilisateur</i></button>
                                <!-- Modal Ajouter -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Utilisateur
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Civilité</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value="Mme/M." />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Nom</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value="Larose" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Prénom
                                                        (s)</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value="Sophie" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Email</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="email"
                                                            value="email@gmail.com" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Numéro
                                                        Téléphone</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value="+330654356789" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Pays</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value=""
                                                            placeholder="Pays" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Adresse</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value=""
                                                            placeholder="Rue" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <div class="col-lg-6">
                                                        <input class="form-control" type="text" value=""
                                                            placeholder="Ville" />
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" value=""
                                                            placeholder="Code postal" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Mot
                                                        de passe</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="password"
                                                            value="1233456789" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Confirmer
                                                        mot de passe</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="password" value="123456789" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Type
                                                        utilisateur</label>
                                                    <div class="col-lg-9">
                                                        <select class="form-control form-control-sm">
                                                            <option value="Postulant">Postulant</option>
                                                            <option value="Entreprise">Entreprise</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Fermer</button>
                                                <button type="button" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ajouter -->
                                <thead class="thead-white">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénom (s)</th>
                                        <th scope="col">Type Utilisateurs</th>
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
                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                data-target="#exampleModal"><i class="fas fa-edit"></i></button>
                                            <!-- Modal Modifier -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Utilisateur
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Civilité</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="Mme/M." />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Nom</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="Larose" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Prénom
                                                                    (s)</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="Sophie" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Email</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="email"
                                                                        value="email@gmail.com" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Numéro
                                                                    Téléphone</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="+330654356789" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Pays</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Pays" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Adresse</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Rue" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label"></label>
                                                                <div class="col-lg-6">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Ville" />
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Code postal" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Mot
                                                                    de passe</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        value="1233456789" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Confirmer
                                                                    mot de passe</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        value="123456789" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Type
                                                                    utilisateur</label>
                                                                <div class="col-lg-9">
                                                                    <select class="form-control form-control-sm">
                                                                        <option value="Postulant">Postulant</option>
                                                                        <option value="Entreprise">Entreprise</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fermer</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Modifier</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Modifier -->

                                            <button class="btn btn-outline-danger" data-toggle="modal"
                                                data-target="#modalSupp"><i class="fas fa-trash-alt"></i></button>
                                            <!-- Modal supprimer -->
                                            <div class="modal fade" id="modalSupp" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Annonce</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez‑vous vraiment supprimer cet utilisateur ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fermer</button>
                                                            <button type="button"
                                                                class="btn btn-danger">Supprimer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal supprimer -->
                                        </td>














                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                data-target="#exampleModal"><i class="fas fa-edit"></i></button>
                                            <!-- Modal Modifier -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Utilisateur
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Civilité</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="Mme/M." />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Nom</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="Larose" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Prénom
                                                                    (s)</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="Sophie" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Email</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="email"
                                                                        value="email@gmail.com" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Numéro
                                                                    Téléphone</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="+330654356789" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Pays</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Pays" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Adresse</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Rue" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label"></label>
                                                                <div class="col-lg-6">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Ville" />
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Code postal" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Mot
                                                                    de passe</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        value="1233456789" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Confirmer
                                                                    mot de passe</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        value="123456789" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Type
                                                                    utilisateur</label>
                                                                <div class="col-lg-9">
                                                                    <select class="form-control form-control-sm">
                                                                        <option value="Postulant">Postulant</option>
                                                                        <option value="Entreprise">Entreprise</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fermer</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Modifier</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Modifier -->

                                            <button class="btn btn-outline-danger" data-toggle="modal"
                                                data-target="#modalSupp"><i class="fas fa-trash-alt"></i></button>
                                            <!-- Modal supprimer -->
                                            <div class="modal fade" id="modalSupp" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Annonce</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez‑vous vraiment supprimer cet utilisateur ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fermer</button>
                                                            <button type="button"
                                                                class="btn btn-danger">Supprimer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal supprimer -->
                                        </td>














                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                data-target="#exampleModal"><i class="fas fa-edit"></i></button>
                                            <!-- Modal Modifier -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Utilisateur
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Civilité</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="Mme/M." />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Nom</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="Larose" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Prénom
                                                                    (s)</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="Sophie" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Email</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="email"
                                                                        value="email@gmail.com" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Numéro
                                                                    Téléphone</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        value="+330654356789" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Pays</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Pays" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Adresse</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Rue" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label"></label>
                                                                <div class="col-lg-6">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Ville" />
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Code postal" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Mot
                                                                    de passe</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        value="1233456789" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Confirmer
                                                                    mot de passe</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        value="123456789" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Type
                                                                    utilisateur</label>
                                                                <div class="col-lg-9">
                                                                    <select class="form-control form-control-sm">
                                                                        <option value="Postulant">Postulant</option>
                                                                        <option value="Entreprise">Entreprise</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fermer</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Modifier</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Modifier -->

                                            <button class="btn btn-outline-danger" data-toggle="modal"
                                                data-target="#modalSupp"><i class="fas fa-trash-alt"></i></button>
                                            <!-- Modal supprimer -->
                                            <div class="modal fade" id="modalSupp" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Annonce</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez‑vous vraiment supprimer cet utilisateur ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fermer</button>
                                                            <button type="button"
                                                                class="btn btn-danger">Supprimer</button>
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
<?php include("include/header.php"); ?>

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 mt-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-5">
        <div class="d-flex justify-content-between align-items-center w-100">
            <h4 id="pageName" class="font-weight-bolder mb-0" style="scale: 108%;">Gestion Admins Supermarché</h4>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav ms-auto justify-content-end">
                    <li class="nav-item ms-md-auto pe-md-3 d-flex align-items-center justify-content-end">
                        <div class="input-group input-group-outline me-2">
                            <input type="text" class="form-control" placeholder="Saisir ici..." />
                        </div>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="profil.php" class="nav-link text-body font-weight-bold px-1">
                            <i class="bi bi-person-circle px-1" style="font-size: 20px;"></i>
                            <span class="d-sm-inline d-none" style="font-size: 15px;">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid py-4">
    <div class="row align-items-center bg-white rounded-5 mb-5 mt-2 m-1 shadow-dark">
        <div class="card-header p-0 position-relative z-index-2 mb-3">
            <div class="shadow-primary border-radius-lg pt-4 d-flex justify-content-between" style="background: rgb(232, 201, 215);">
                <h4 class="text-capitalize ps-3 mt-2 ms-2" style="color: rgb(201, 79, 132);">Ajouter Admin Supermarché</h4>
                <button class="btn me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="bi bi-caret-down-square-fill fs-4 m-0" style="color: rgb(201, 79, 132); opacity:100%;"></i>
                </button>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <form action="" method="post" id="addUserForm" novalidate>
                <div class="col" style="scale :90%;">
                    <div class="row">

                        <div class="col-md-6">
                            <label for="Nom">Nom</label>
                            <input type="text" name="Nom" required class="form-control form-control-lg bg-light fs-6" />
                        </div>
                        <div class="col-md-6">
                            <label for="Prenom">Prénom</label>
                            <input type="text" name="Prenom" required class="form-control form-control-lg bg-light fs-6" />
                        </div>
                        <div class="w-100 d-none d-md-block mb-2"></div>

                        <div class="col-md-6">
                            <label for="Pseudo">Pseudo</label>
                            <input type="text" name="Pseudo" required class="form-control form-control-lg bg-light fs-6" />
                        </div>
                        <div class="col-md-6">
                            <label for="Email">Email</label>
                            <input type="email" name="Email" required class="form-control form-control-lg bg-light fs-6" />
                        </div>
                        <div class="w-100 d-none d-md-block mb-2"></div>

                        <div class="col-md-6">
                            <label for="MotDePasse">Mot de passe</label>
                            <input type="password" name="MotDePasse" required class="form-control form-control-lg bg-light fs-6" />
                        </div>
                        <div class="col-md-6">
                            <label for="CMotDePasse">Confirmer le mot de passe</label>
                            <input type="password" name="CMotDePasse" required class="form-control form-control-lg bg-light fs-6" />
                        </div>
                        <div class="w-100 d-none d-md-block mb-2"></div>

                        <div class="col-md-6">
                            <label for="Adresse">Adresse</label>
                            <input type="text" name="Adresse" required class="form-control form-control-lg bg-light fs-6" />
                        </div>
                        <div class="col-md-6">
                            <label for="Telephone">Téléphone</label>
                            <input type="tel" name="Telephone" required class="form-control form-control-lg bg-light fs-6" />
                        </div>

                        <div class="row mt-5 align-items-center justify-content-center">
                            <button class="btn btn-lg btn-primary w-20 p-3 fs-8 text-wrap" name="add_user_button" type="submit">Ajouter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card my-4 shadow-dark bg-white">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="shadow-primary border-radius-lg pt-4 pb-3" style="background: rgb(232, 201, 215);">
                        <h4 class="text-capitalize ps-3" style="color: rgb(201, 79, 132);">Table Des Admins Supermarché</h6>
                    </div>
                </div>
                <div class="card-body px-1 pb-2">
                    <div class="table-responsive px-2 align-items-center">
                        <table class="table table-responsive table-md align-items-center mb-2 custom-text-color">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-xs font-weight-bolder opacity-9 custom-text-color">ID</th>
                                    <th class="text-center text-uppercase text-xs font-weight-bolder opacity-9 custom-text-color">Pseudo</th>
                                    <th class="text-center text-uppercase text-xs font-weight-bolder opacity-9 custom-text-color">Nom</th>
                                    <th class="text-center text-uppercase text-xs font-weight-bolder opacity-9 custom-text-color">Prenom</th>
                                    <th class="text-center text-uppercase text-xs font-weight-bolder opacity-9 custom-text-color">Adresse</th>
                                    <th class="text-center text-uppercase text-xs font-weight-bolder opacity-9 custom-text-color">Email</th>
                                    <th class="text-center text-uppercase text-xs font-weight-bolder opacity-9 custom-text-color">Telephone</th>
                                    <th class="text-center text-uppercase text-xs font-weight-bolder opacity-9 custom-text-color">Statut</th>
                                    <th class="text-center text-uppercase text-xs font-weight-bolder opacity-9 custom-text-color">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                // Connexion à la base de données
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "bd_pfe";

                                // Créer une connexion
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Vérifier la connexion
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Sélectionner les utilisateurs depuis la table
                                $sql = "SELECT ID_User, Pseudo, Nom, Prenom, Adresse, Email, Telephone, Statut FROM user WHERE Role='Admin Supermarche'";
                                $result = $conn->query($sql);


                                while ($row = $result->fetch_assoc()) {
                                    echo "
                                        <tr>
                                            <td class='text-center text-wrap opacity-7'>" . $row["ID_User"] . " </td>    
                                            <td class='text-center text-wrap opacity-7'>" . $row["Pseudo"] . " </td>
                                            <td class='text-center text-wrap opacity-7'>" . $row["Nom"] . " </td>
                                            <td class='text-center text-wrap opacity-7'>" . $row["Prenom"] . " </td>
                                            <td class='text-center text-wrap opacity-7' >" . $row["Adresse"] . " </td>
                                            <td class='text-center text-wrap opacity-7'>" . $row["Email"] . " </td>
                                            <td class='text-center text-wrap opacity-7'>" . $row["Telephone"] . " </td>
                                            <td class='text-center text-wrap opacity-7'>" . $row["Statut"] . " </td>
                                            <td class='action-buttons text-wrap text-center'>
                                                <form method='POST' action=''>
                                                <input type='hidden' name='user_id' value='" . $row["ID_User"] . "'>
                                                <button class='btn btn-sm tcustom-sidebar-btn ps-1 pe-1' type='submit' name='suspend_button'>Suspendre</button>
                                                <button class='btn btn-sm tcustom-sidebar-btn ps-1 pe-1' type='submit' name='resume_button'>Reprendre</button>
                                                <button class='btn btn-sm tcustom-sidebar-btn ps-1 pe-1' type='submit' name='delete_button'>Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                                // Traitement des actions
                                if (isset($_POST['suspend_button'])) {
                                    // Effectuer la mise à jour pour suspendre l'utilisateur
                                    $userId = $_POST['user_id'];
                                    $updateQuery = "UPDATE user SET Statut='Suspendu' WHERE ID_User=$userId";
                                    $conn->query($updateQuery);
                                }

                                if (isset($_POST['resume_button'])) {
                                    // Effectuer la mise à jour pour reprendre l'utilisateur
                                    $userId = $_POST['user_id'];
                                    $updateQuery = "UPDATE user SET Statut='Actif' WHERE ID_User=$userId";
                                    $conn->query($updateQuery);
                                }

                                if (isset($_POST['delete_button'])) {
                                    // Effectuer la suppression de l'utilisateur
                                    $userId = $_POST['user_id'];
                                    $deleteQuery = "DELETE FROM user WHERE ID_User=$userId";
                                    $conn->query($deleteQuery);
                                }

                                if (isset($_POST['add_user_button'])) {
                                    // Récupérer les données du formulaire
                                    $nom = $_POST['Nom'];
                                    $prenom = $_POST['Prenom'];
                                    $pseudo = $_POST['Pseudo'];
                                    $email = $_POST['Email'];
                                    $motDePasse = $_POST['MotDePasse'];
                                    $cMotDePasse = $_POST['CMotDePasse'];
                                    $adresse = $_POST['Adresse'];
                                    $telephone = $_POST['Telephone'];
                                    //$newUserRole = $_POST['new_user_role'];

                                    // Préparer et exécuter la requête SQL pour ajouter l'utilisateur
                                    $insertQuery = "INSERT INTO user (Pseudo, MotDePasse, Nom, Prenom, Adresse, Telephone, Email, Role)
                                VALUES ('$pseudo', '$motDePasse', '$nom', '$prenom', '$adresse', '$telephone', '$email', 'Admin Supermarché')";

                                    if ($conn->query($insertQuery) === TRUE) {
                                        echo "Nouvel utilisateur ajouté avec succès.";
                                    } else {
                                        echo "Erreur lors de l'ajout de l'utilisateur : " . $conn->error;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
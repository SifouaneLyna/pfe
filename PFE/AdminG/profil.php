<?php include("include/header.php"); ?>
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

// Requête pour récupérer les informations de l'utilisateur (tu peux adapter cela en fonction de ta structure de table)
$user_id = 1; // Remplace 1 par l'ID réel de l'admin
$sql = "SELECT Pseudo,Nom,Prenom,Email,Adresse,Telephone,Role FROM user WHERE Role ='Admin General'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
}
?>


<nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 mt-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-5">
        <div class="d-flex justify-content-between align-items-center w-100">
            <h4 id="pageName" class="font-weight-bolder mb-0" style="scale: 108%;">Profile</h4>

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


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10 custom-text-color">
            <div class="row align-items-center bg-white rounded-5 mb-2 mt-2 m-1 shadow-dark p-3">
                <div class="row justify-content-center text-center mb-2">
                    <div class="col-md-1 text-center">
                        <img src="images/pfp.png" alt="Photo de profil" class="img-fluid" style="max-width: 100px;">
                    </div>
                    <div class="col-md-4 mt-3">
                        <h2 class="font-weight-bolder custom-text-color"><?php echo $user_data['Pseudo']; ?></h2>
                        <p class="text-sm"><?php echo $user_data['Role']; ?></p>
                    </div>
                </div>
                <hr class="dark horizontal my-0" />
                <div class="row justify-content-center mt-4">
                    <div class="col-md-12 mb-3">
                        <h3 class="opacity-9 text-center">Informations Personnelles</h3>
                        <ul class="list-unstyled opacity-8 text-center">
                            <li><strong>Nom :</strong> <?php echo $user_data['Nom']; ?></li>
                            <li><strong>Prénom :</strong> <?php echo $user_data['Prenom']; ?></li>
                            <li><strong>Email :</strong> <?php echo $user_data['Email']; ?></li>
                            <li><strong>Adresse :</strong> <?php echo $user_data['Adresse']; ?></li>
                            <li><strong>Téléphone :</strong> <?php echo $user_data['Telephone']; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-auto mx-3">
                        <a href="modifier_profil.php" class="btn text-white custom-sidebar-btn btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">Modifier le Profil</a>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <?php
                        // Assumez que vous avez déjà l'ID de l'utilisateur à modifier, par exemple, à partir de la session.
                        $user_id = 1; // Remplacez par la méthode appropriée pour obtenir l'ID de l'utilisateur

                        // Connectez-vous à la base de données
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "bd_pfe";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Vérifiez la connexion
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Récupérez les informations actuelles de l'utilisateur
                        $sql = "SELECT Pseudo, Nom, Prenom, Pseudo, Email, Adresse, Telephone FROM user WHERE Role='Admin General'";
                        $result = $conn->query($sql);

                        // Vérifiez si des résultats ont été trouvés
                        if ($result->num_rows > 0) {
                            $user_data = $result->fetch_assoc();
                        } else {
                            echo "Aucun utilisateur trouvé avec cet ID.";
                            exit; // Arrêtez le script si aucun utilisateur n'est trouvé.
                        }



                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Récupérer les données du formulaire
                            $nom = $_POST['Nom'];
                            $prenom = $_POST['Prenom'];
                            $pseudo = $_POST['Pseudo'];
                            $email = $_POST['Email'];
                            $adresse = $_POST['Adresse'];
                            $telephone = $_POST['Telephone'];
                            // ... (récupérez les autres champs de la même manière)

                            // Supposons que $user_id contient l'identifiant de l'utilisateur à modifier
                            $updateQuery = "UPDATE user SET Nom='$nom', Prenom='$prenom', Pseudo='$pseudo', Email='$email', Adresse='$adresse', Telephone='$telephone'  WHERE Role='Admin General'";

                            // Exécuter la mise à jour
                            if ($conn->query($updateQuery) === TRUE) {
                                echo "Les informations ont été mises à jour avec succès.";
                            } else {
                                echo "Erreur lors de la mise à jour : " . $conn->error;
                            }
                            header("Location: index5.php");
                        }


                        // Fermez la connexion à la base de données
                        $conn->close();
                        ?>

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title ms-3">Modifier Profil</h3>
                                    <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close" style="color: black;">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" novalidate onsubmit="return confirmerModification();">
                                        <div class="col" style="scale :90%;">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <label for="Nom">Nom</label>
                                                    <input type="text" name="Nom" value="<?php echo $user_data['Nom']; ?>" required class="form-control form-control-lg bg-light fs-6" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Prenom">Prénom</label>
                                                    <input type="text" name="Prenom" value="<?php echo $user_data['Prenom']; ?>" required class="form-control form-control-lg bg-light fs-6" />
                                                </div>
                                                <div class="w-100 d-none d-md-block mb-2"></div>

                                                <div class="col-md-6">
                                                    <label for="Pseudo">Pseudo</label>
                                                    <input type="text" name="Pseudo" value="<?php echo $user_data['Pseudo']; ?>" required class="form-control form-control-lg bg-light fs-6" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Email">Email</label>
                                                    <input type="email" name="Email" value="<?php echo $user_data['Email']; ?>" required class="form-control form-control-lg bg-light fs-6" />
                                                </div>
                                                <div class="w-100 d-none d-md-block mb-2"></div>

                                                <div class="col-md-6">
                                                    <label for="Adresse">Adresse</label>
                                                    <input type="text" name="Adresse" value="<?php echo $user_data['Adresse']; ?>" required class="form-control form-control-lg bg-light fs-6" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Telephone">Téléphone</label>
                                                    <input type="tel" name="Telephone" value="<?php echo $user_data['Telephone']; ?>" required class="form-control form-control-lg bg-light fs-6" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto mx-3">
                        <a href="include/logout.php" class="btn text-white custom-sidebar-btn btn-md">Se Déconnecter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("include/footer.php"); ?>
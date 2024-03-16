<?php

if (empty($_POST['Nom'])) {
    die("Le nom est obligatoire");
}
if (empty($_POST['Prenom'])) {
    die("Le prénom est obligatoire");
}
if (empty($_POST['Pseudo'])) {
    die("Le pseudo est obligatoire");
}
if (empty($_POST['Email'])) {
    die("Le champ Email est obligatoire");
}
if (empty($_POST['MotDePasse'])) {
    die("Le mot de passe est obligatoire");
}
if (empty($_POST['CMotDePasse'])) {
    die("La confirmation du mot de passe est obligatoire");
}
if (empty($_POST['Adresse'])) {
    die("L'adresse est obligatoire");
}
if (empty($_POST['Telephone'])) {
    die("Le téléphone est obligatoire");
}
if (empty($_POST['Role'])) {
    die("Le rôle est obligatoire");
}


//verification si l'email existe
// if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
//     die("L'Email n'est pas valide.");
// }

//verification si le mdp est valide
if (strlen($_POST['MotDePasse']) < 8) {
    die("Le mot de passe doit contenir au moins 8 caractères.");
}

if (!preg_match("/[a-z]/i", $_POST['MotDePasse'])) {
    die("Le mot de passe doit contenir au moins une lettre.");
}

if (!preg_match("/[0-9]/", $_POST['MotDePasse'])) {
    die("Le mot de passe doit contenir au moins un chiffre.");
}

if ($_POST['MotDePasse'] !== $_POST['CMotDePasse']) {
    die("Les mots de passe ne correspondent pas.");
}

//hasher le mdp pour le securiser contre les attaques

$mdp_hash = password_hash($_POST['MotDePasse'], PASSWORD_DEFAULT);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $pseudo = $_POST['Pseudo'];
    $email = $_POST['Email'];
    $motDePasse = $_POST['MotDePasse'];
    $cMotDePasse = $_POST['CMotDePasse'];
    $adresse = $_POST['Adresse'];
    $telephone = $_POST['Telephone'];
    $role = $_POST['Role'];

    try {
        $mysqli = require __DIR__ . "/conn.php";

        // Vérifier si le pseudo est déjà pris
        $checkPseudoQuery = "SELECT COUNT(*) FROM User WHERE Pseudo = ?";
        $checkPseudoStmt = $mysqli->prepare($checkPseudoQuery);
        $checkPseudoStmt->bind_param("s", $pseudo);
        $checkPseudoStmt->execute();
        $checkPseudoStmt->bind_result($pseudoCount);
        $checkPseudoStmt->fetch();
        $checkPseudoStmt->close();

        if ($pseudoCount > 0) {
            die("Le pseudo est déjà utilisé. Veuillez choisir un autre pseudo.");
        }

        // Vérifier si l'email est déjà pris
        // $checkEmailQuery = "SELECT COUNT(*) FROM User WHERE Email = ?";
        // $checkEmailStmt = $mysqli->prepare($checkEmailQuery);
        // $checkEmailStmt->bind_param("s", $email);
        // $checkEmailStmt->execute();
        // $checkEmailStmt->bind_result($emailCount);
        // $checkEmailStmt->fetch();
        // $checkEmailStmt->close();

        // if ($emailCount > 0) {
        //     die("L'adresse e-mail est déjà associée à un compte existant. Veuillez utiliser une autre adresse e-mail.");
        // }

        $query = "INSERT INTO User (Pseudo, Nom, Prenom, Email, MotDePasse, Adresse, Telephone, Role) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssssssss", $pseudo, $nom, $prenom, $email, $mdp_hash, $adresse, $telephone, $role);
        $stmt->execute();
        $stmt->close();

        $mysqli->close();

        echo "compte cree avec succes";

        session_start();

        session_regenerate_id();

        $_SESSION["user_id"] = $user["ID_User"];

        echo "youre logged in";

        header("Location: ../adming.php");

        exit;

        die();
    } catch (mysqli_sql_exception  $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location: f_insc.php");
    die();
}

<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/conn.php"; // Assuming your connection file is named conn.php

    $sql = sprintf(
        "SELECT * FROM User
                    WHERE Email = '%s'",
        $mysqli->real_escape_string($_POST["Email"])
    );

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

        if (password_verify($_POST["MotDePasse"], $user["MotDePasse"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["ID_User"];

            echo "youre logged in";

            header("Location: ../adming.php");

            exit;
        }
    }

    $is_invalid = true;
}

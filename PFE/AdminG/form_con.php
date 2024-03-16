<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire de connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css" type="text/css" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .custom-container {
            max-width: 1200px;
            scale: 95%;
        }
    </style>
</head>

<body>
    <div class="container custom-container d-flex justify-content-center align-items-center">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- left box -->
            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: rgb(232, 201, 215);">
                <div class="featured-image mb-3">
                    <img src="images/logo.png" class="img-fluid" style="width:350px;">
                </div>
                <p class="fs-4 text-center text-wrap" style="color: #CC4880; font-family: lobster;">Explorer une expérience de shopping exceptionnelle</p>
            </div>
            <!-- right box -->
            <div class="col-md-7 right-box">
                <div class="row align-items-center">
                    <h3 class="header-text mt-2 mb-4">Se connecter</h3>
                    <form action="include/f_con.php" method="post" novalidate>
                        <div class="col">
                            <div class="row">

                                <div class="col-md-12">
                                    <label for="Email">Email</label>
                                    <input type="email" name="Email" required class="form-control form-control-lg bg-light fs-6" />
                                </div>
                                <div class="w-100 d-none d-md-block mb-2"></div>

                                <div class="col-md-12">
                                    <label for="MotDePasse">Mot de passe</label>
                                    <input type="password" name="MotDePasse" required class="form-control form-control-lg bg-light fs-6" />
                                </div>
                                <div class="w-100 d-none d-md-block mb-2"></div>

                                <div class="row mt-4 align-items-center justify-content-center">
                                    <button class="btn btn-lg btn-primary w-50 fs-6 " name="submit" type="submit">Se connecter</button>
                                    <a href="form_insc.php" type="button" class="btn btn-link mt-2">Vous n'avez pas de compte ? S'inscrire.</a>
                                </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
</body>

</html>
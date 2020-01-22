<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="./theme/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a97bdd2013.js" crossorigin="anonymous"></script>
    <title>Avalon</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="logo p-0 navbar-brand" href="#"><img src="theme/img/logo-min.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="menu.html">Menu</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#">Connexion<span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <a class="profile my-2 my-lg-0" href="#"><i class="fas fa-user-circle"></i></a>
        </div>
    </nav>

            <div class="container pt-5 pt-lg-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-lg-6">
                            <div class="bg-white px-3 px-sm-8 py-4">
                            <form class="mb-3 text-dark" action="login.php" method="post">
                                    <h1 class="h3 text-center font-mc">SE CONNECTER</h1>
                                    <label for="exampleInputEmail1">Adresse email</label>
                                    <input type="email" class="border form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse mail">
                                    <br>
                                    <label for="exampleInputPassword1">Mot de passe</label>
                                    <input type="password" class="border form-control" id="exampleInputPassword1" placeholder="Votre MDP">
                                    <br>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Se souvenir de moi</label>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary btn-block btn-lg" type="submit">Se connecter</button>
                            </form>
                            </div>
                            <p style="background-color:rgba(47,79,79,.25); font-size:0.75em" class="p-2 text-center text-light">
                                Veuillez vous connecter avec les identifiants et le mot de passe utilisé lors de la première connexion à <strong>Avalon</strong> 
                            </p>
                    </div>
                </div>
            </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
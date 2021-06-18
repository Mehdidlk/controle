<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion du requin</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <?php require_once 'headers.php' ?>
    <main>
        <form action="/controllers/sign.php">
            <h1>Inscription</h1>
            <div class="form-group">
                <label for="name">Login</label>
                <input type="text" class="form-control" placeholder="Nom du requin" name="name" >
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div>
                <input type="radio" name="gender" value="man" checked>
                <label for="man">Homme</label>
            </div>
            <div>
                <input type="radio" name="gender" value="woman">
                <label for="woman">Femme</label>

                <div>
                    <input type="radio" name="gender" value="woman">
                    <label for="woman">Requin</label>
                </div>

                <button type="submit" class="btn btn-primary">S'inscire pour voir des requins</button>
        </form>
    </main>
</body>

</html>
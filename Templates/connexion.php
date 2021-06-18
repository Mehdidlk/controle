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
        <form method="GET"  action="/controllers/login.php">
            <h1>Se connecter</h1>
            <div class="form-group">
                <label for="name">Login</label>
                <input type="text" class="form-control" placeholder="Nom du requin" name="name" >
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Requin du 69">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter pour voir des requins</button>
        </form>
    </main>
</body>

</html>
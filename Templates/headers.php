
<?php session_start();

?>


<header>
    <nav id="navbar">
        <ul>
            <li><a href="/index.php">L'acceuil Requin</a></li>
            <li><a href="/Templates/inscription.php">L'inscription des Requins</a></li>
            <li><a href="users.php">Les utilisateurs Requin</a></li>
            <?php if (isset($_SESSION['isconnected'])): ?>
                <li>Bonjour SUPER REQUIN  <?= $_SESSION['isconnected'] ?> !</li>
                <li><a href="controllers/logout.php">Déconnexion des requins</a></li>
            <?php else: ?>
                <li><a href="/Templates/connexion.php">La connexion des requins
                </a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>   
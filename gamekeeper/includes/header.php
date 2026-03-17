<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Collection de Jeux</title>
    <link rel="stylesheet" href="/runTRACKPHP/gamekeeper/assets/css/accueil.css">
</head>
<body>
<header>
    <div class="nav">
        <a class="btn" href="../index.php">Accueil</a>
        <a class="btn" href="./views/register.php">Inscription</a>
        <a class="btn" href="index.php">Connexion</a>
        <?php
        if (isset($_SESSION["username"])) {
            echo "<a class='btn' href='../profil.php'>Profil</a>";
        }
        ?>
    </div>
</header>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Golden Book</title>
    <link href="../css/accueil.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <link href = "../css/profile.css" rel = "stylesheet">

</head>
<body>

<header>
    <?php include "./config.php"?>
        <nav id="nav">
        <a href="./accueil.php"><p>Accueil</p></a>
        <?php if (!isset($_SESSION)){
            echo "<a href = './register.php'> <p>Inscription</p></a>"; }?>
        <?php if (!isset($_SESSION)){
            echo "<a href = './index.php'><p>Connexion</p></a>"; }?>
      </nav>
</header>
<main>



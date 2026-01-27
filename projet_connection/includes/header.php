<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini Login</title>
    <link href="../css/header1.css" rel="stylesheet">
    <link href="../css/registre.css" rel="stylesheet">
    <link href = "../css/admin.css" rel = "stylesheet">


</head>
<body>
    <header>
    <div class="nav">
        <a href="../accueil.php"><p>Accueil</p></a>
        <a href="register.php"><p>Inscription</p></a>
        <a href="index.php"><p>Connexion</p></a>
        <?php  if (isset($_SESSION["username"])){
            echo "<a href = '../profil.php'></a>";
            }else {
                }?>
    </div></header>
    <h1>Sites inauguratif de JoJo's Bizarre Adventure</h1>



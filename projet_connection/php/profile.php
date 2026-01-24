<?php
include './config.php';
include '../includes/header.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>


<link href = "./profile.css" rel ="stylesheet"> 
<h1>Bienvenue <?= $_SESSION['user']['username'] ?> !!</h1>

<div id = "d">
<a class = "lien" href="edit.php">Modifier le profil</a><br>
<a class = "lien" href="delete.php">Supprimer le profil</a><br>
<a class = "lien" href="logout.php">Déconnexion</a>
</div>

<?php include 'includes/footer.php'; ?>

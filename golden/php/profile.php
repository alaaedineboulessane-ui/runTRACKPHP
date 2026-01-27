<?php
include './config.php';
include '../include/header.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<h1>Bienvenue <?= $_SESSION['user']['username'] ?> !!</h1>
<div>
<a href="edit.php">Modifier le profil</a><br>
<a href="delete.php">Supprimer le profil</a><br>
<a href="logout.php">Déconnexion</a>
</div>
<?php include '../include/footer.php'; ?>

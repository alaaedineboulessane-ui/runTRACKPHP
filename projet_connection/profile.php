<?php
include 'config.php';
include 'includes/header.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<h1>Bienvenue <?= $_SESSION['user']['username'] ?> !!</h1>

<a href="edit.php">Modifier le profil</a><br>
<a href="delete.php">Supprimer le profil</a><br>
<a href="logout.php">Déconnexion</a>

<?php include 'includes/footer.php'; ?>

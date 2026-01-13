<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['ajouter']) && !empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste de prénoms</title>
</head>
<body>

<h2>Ajouter un prénom</h2>
<form method="post">
    <input type="text" name="prenom" placeholder="Entrez un prénom" required>
    <button type="submit" name="ajouter">Ajouter</button>
    <button type="submit" name="reset">Reset</button>
</form>

<h3>Liste des prénoms :</h3>
<ul>
    <?php foreach ($_SESSION['prenoms'] as $prenom) : ?>
        <li><?php echo htmlspecialchars($prenom); ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>

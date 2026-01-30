<?php
include '../includes/header.php';

if (!empty($_POST)) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);

    if (empty($username) || empty($password) || empty($nom) || empty($prenom)) {
        echo "Champs obligatoires";
    } elseif (strlen($username) < 3) {
        echo "Nom trop court";
    } elseif (strlen($password) < 6 || !preg_match('/[0-9]/', $password)) {
        echo "Mot de passe invalide";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (nom,prenom, username, password)
                VALUES (:nom, :prenom, :username, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':username' => $username,
            ':password' => $hash
        ]);
        header("Location: index.php");
        exit();

    }
}
?>
<link href = "../css/register.css" rel = "stylesheet">
<form method="post">
            <p>Informations personnelles</p>
    <div>

        <input type="text" name="nom" placeholder="Nom de famille">
        <input type="text" name="prenom" placeholder="Prénom">
    </div>

        <p>Informations de connexion</p>
    <div>
        <input type="text" name="username" placeholder="Identifiant">
        <input type="password" name="password" placeholder="Mot de passe">

        <button type="submit">Inscription</button>
    </div>
</form>




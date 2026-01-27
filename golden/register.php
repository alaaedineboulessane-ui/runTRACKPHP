<?php
include './configuration.php';
include '../include/header.php';

if (!empty($_POST)) {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Champs obligatoires";
    } elseif (strlen($username) < 3) {
        echo "Nom trop court";
    } elseif (strlen($password) < 6 || !preg_match('/[0-9]/', $password)) {
        echo "Mot de passe invalide";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password)
                VALUES (:username, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':username' => $username,
            ':password' => $hash
        ]);

        echo "Compte créé";
    }
}
?>
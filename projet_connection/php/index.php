<?php
include 'config.php';
include '../includes/header.php';

if (!empty($_POST)) {
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $_POST['username']
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['user'] = $user;
        if ($user['username'] == "admin" && $user['password'] == "admin2") {
            header("Location: admin.php");
            exit;
        } else {
            header("Location: profile.php");
            exit;
        }
    } else {
        echo "Identifiants incorrects";
    }
}
?>

<form method="post">
    <p>Informations de connexion</p>
    <div>
        <input type="text" name="username" placeholder="Identifiant">
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Connexion</button>
    </div>
</form>

<?php include '../includes/footer.php'; ?>

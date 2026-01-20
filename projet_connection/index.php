<?php
include 'config.php';
include 'includes/header.php';

if (!empty($_POST)) {
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $_POST['username']
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: profile.php");
        exit;
    } else {
        echo "Identifiants incorrects";
    }
}
?>


<form method="post">
    <input type="text" name="username" placeholder="Identifiant">

    <input type="password" name="password" placeholder="Mot de passe">
    <button>Connexion</button>
</form>

<?php include 'includes/footer.php'; ?>

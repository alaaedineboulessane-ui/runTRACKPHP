<?php
include './config.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

if (!empty($_POST)) {

    $sql = "UPDATE users 
            SET username = :username 
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $_POST['username'],
        ':id' => $_SESSION['user']['id']
    ]);

    $_SESSION['user']['username'] = $_POST['username'];
    header("Location: profile.php");
}
?>

<form method="post">
    <input type="text" name="username" value="<?= $_SESSION['user']['username'] ?>">
    <button>Modifier</button>
</form>

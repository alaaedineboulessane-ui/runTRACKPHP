<?php
include './config.php';
if (!empty($_POST["submit"])) {

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $_POST['username']
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user'] = $user;
        $_SESSION['username'] = $user["username"];
      

           if($_SESSION["user"]["username"] == "adminadmin" ){
            header("Location: admin.php");

    }else{
         header("Location: profile.php");
    }

    }
}

?>
<?php include '../include/header.php'; ?>
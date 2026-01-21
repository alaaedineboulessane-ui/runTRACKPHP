<?php
include 'config.php';
include 'includes/header.php';

if (!empty($_POST)) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($username) && !empty($password) && strlen($username) >= 3 && strlen($password) >= 6 && preg_match('/[0-9]/', $password)) {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':username' => $username,
                ':password' => $hash
            ]);
            header("Location: index.php");
            exit;
        } catch (PDOException $e) {
            echo "Erreur SQL";
        }
    } else {
        echo "Données invalides";
    }
}
?>

<div id="jojo1"></div>
<div id="presentation">
    <h3>Ceci est un site affichant les différentes informations sur le manga et dessin animé JoJo's Bizarre Adventure, veuillez vous inscrire ou vous connecter pour accèder.</h3>
</div>
<form method="post">
    <div>
        <label>
            <p>Informations personnelles</p>
            <input type="text" name="nom" placeholder="Nom de famille">
            <input type="text" name="prenom" placeholder="Prénom">
        </label>
        <label>
            <p>Informations de connexion</p>
            <input type="text" name="username" placeholder="Identifiant">
            <input type="password" name="password" placeholder="Mot de passe">
        </label>
        <button type="submit">Inscription</button>
    </div>
</form>
<div style="width:1200px; height:300px; background-image:url('https://wallpapercave.com/wp/wp3989500.jpg'); background-size:cover; background-position:top; background-repeat:no-repeat; margin: auto; margin-top: 100px; border-radius: 200px; border: 10px solid black">
</div></div>

<?php include 'includes/footer.php'; ?>

<?php
$servname = "localhost";
$dbname = "jour08";  
$user = "root";
$pass = "";    

try {
    $dbco = new PDO(
        "mysql:host=$servname;dbname=$dbname;charset=utf8",
        $user,
        $pass
    );
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM étudiants";
    $stmt = $dbco->query($sql);
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>

</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($etudiants as $e): ?>
        <tr>
            <td><?= $e['id'] ?></td>
            <td><?= $e['nom'] ?></td>
            <td><?= $e['prénom'] ?></td>
            <td><?= $e['email'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
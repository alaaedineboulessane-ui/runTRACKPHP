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

    $sql = "SELECT avg(capacite) as 'moyennne' from salle ";
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
            <th>Moyenne</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($etudiants as $e): ?>
        <tr>
            <td><?= $e['moyenne'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
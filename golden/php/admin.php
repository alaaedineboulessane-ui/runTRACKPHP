<?php 
if ( $_SESSION["user"]["username"]  !== 'adminadmin') {
    header("Location: index.php");
    exit;
}

try{
    $sql = "SELECT id, login, nom, username FROM users";
    $stmt =$pdo->query($sql);
    $users=$stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump ($users);
}   catch(PDOException $e){
    echo "Erreur lors d ela récupération des utilisateurs : " . $e->getMessage();
    exit;
}
?>
<?php include '../includes/header.php'; ?>
<link href="../css/admin.css" rel="stylesheet">